<?php

namespace base;

use controllers\ErrorController;
use interfaces\RenderInterface;
use services\DataBase;
use traits\SingleTone;

/**
 * Class Application
 * @package base
 *
 * @property Request $request;
 * @property DataBase $db;
 * @property Session $session;
 * @property RenderInterface $renderer;
 * @property Application $instance;
 */
class Application
{
    use SingleTone;

    protected array $config;
    protected $componentsFactory;
    protected $components;

    public function run(array $config)
    {
        $this->componentsFactory = new ComponentsFactory();
        $this->config = $config;
        $controllerName = $this->request->getControllerName() ?: $this->config['default_controller'];
        $actionName = $this->request->getActionName();

        $controllerClass = $this->config['controller_namespace'] . ucfirst($controllerName) . "Controller";

        if (class_exists($controllerClass)) {
            $controller = new $controllerClass($this->renderer);
            try {
                $controller->runAction($actionName);
            } catch (\ErrorException $e) {
                (new ErrorController($this->renderer))->runAction('notFound');
            }
        }
    }

    /**
     * @throws \Exception
     */
    public function __get(string $name)
    {
        if (is_null($this->components[$name])) {
            if ($params = $this->config['components'][$name]) {
                $this->components[$name] = $this->componentsFactory
                    ->createComponent($name, $params);
            } else {
                throw new \Exception("Не найдена конфигурация для компонента {$name}");
            }
        }
        return $this->components[$name];
    }

    public function getConfig(): array
    {
        return $this->config;
    }


}