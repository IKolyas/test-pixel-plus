<?php
namespace services;

class Autoloader
{
    private string $fileExtension = '.php';

    public function loadClass(string $classname): bool
    {
        $classname = $_SERVER['DOCUMENT_ROOT'] . '/../' . str_replace('\\', '/', $classname);
        $filename = realpath($classname . $this->fileExtension);
        if (file_exists($filename)) {
            require $filename;
            return true;
        }
        return false;
    }
}