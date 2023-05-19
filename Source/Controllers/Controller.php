<?php

namespace Source\Controllers;

use League\Plates\Engine;

abstract class Controller
{
    public static function view(String $view, String $pathView, array $data) :void
    {
        if(!isset($pathView)){
            $viewsPath = dirname(__FILE__, 2)."/Views/";
        }

        $viewsPath = dirname(__FILE__, 2)."/Views/{$pathView}";
        $templates = new Engine($viewsPath);
        echo $templates->render($view, $data);


    }

}