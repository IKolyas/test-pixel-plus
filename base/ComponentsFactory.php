<?php


namespace base;


class ComponentsFactory
{
    /**
     * @throws \ReflectionException
     * @throws \Exception
     */
    public function createComponent($name, $params = []): ?object
    {
        $class = $params['class'];
        if (class_exists($class)) {
            unset($params['class']);
            $reflection = new \ReflectionClass($class);
            return $reflection->newInstanceArgs($params);
        }
        throw new \Exception("Не найден класс компонента");
    }
}