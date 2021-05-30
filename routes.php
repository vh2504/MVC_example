<?php

    function route($controllerName, $action) {
        if(file_exists(realpath('Controllers/'. $controllerName . '.php'))) {
            require_once 'Controllers/'. $controllerName . '.php';
            $controller = new $controllerName;

            $controller->$action();
        }

        die;
    }