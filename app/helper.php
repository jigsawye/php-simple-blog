<?php

    function redirectTo($url = '')
    {
        header('Location: ' . URL . $url);
    }

    function loadView($view) {
        $view = str_replace('.', '/', $view);

        return require_once __DIR__ . '/Views/' . $view . '.php';
    }