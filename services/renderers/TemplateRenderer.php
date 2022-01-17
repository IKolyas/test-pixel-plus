<?php

namespace services\renderers;

use interfaces\RenderInterface;

class TemplateRenderer implements RenderInterface
{
    public function render($template, $params = [])
    {
        ob_start();
        $templatePath = $_SERVER['DOCUMENT_ROOT'] . '/../views/' . $template . ".php";
        extract($params);
        include $templatePath;
        return ob_get_clean();
    }
}