<?php


namespace services;


class Path
{
    public function redirect(string $action)
    {
        header("Location: {$action}");
    }
}