<?php


namespace base;


class Request
{
    protected string $requestString = '';
    protected ?string $controllerName = null;
    protected ?string $actionName = null;
    protected string $urlPattern = "#(?P<controller>\w+)[/]?(?P<action>\w+)?[/]?[?]?(?P<get>.*)#ui";

    public function __construct()
    {
        $this->requestString = $_SERVER['REQUEST_URI'];
        $this->parseRequest();
    }

    protected function parseRequest(): void
    {
        if (preg_match_all($this->urlPattern, $this->requestString, $matches)) {
            $this->controllerName = $matches['controller'][0];
            $this->actionName = $matches['action'][0];
        }
    }

    public function req(string $params)
    {
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method === 'GET') {
            return $this->get($params);
        } else {
            return $this->post($params);
        }
    }

    private function get(string $name)
    {
        return $_GET[$name];
    }

    private function post(string $name)
    {
        return $_POST[$name];
    }

    public function param(string $name)
    {
        return $_REQUEST[$name];
    }

    public function getControllerName(): ?string
    {
        return $this->controllerName;
    }

    public function getActionName()
    {
        return $this->actionName;
    }
}