<?php


namespace base;


class Session
{

    public function __construct()
    {
        session_start();
    }

    public function get($key)
    {
        return $_SESSION[$key];
    }

    public function set(string $key, array $value): void
    {
        $_SESSION[$key] = $value;
    }

    public function empty($key): bool
    {
        return empty($_SESSION[$key]);
    }

    public function exists($key): bool
    {
        return isset($_SESSION[$key]);
    }
    public function delete($key): void
    {
        unset($_SESSION[$key]);
    }
}