<?php

    function redirectTo($url = URL . 'posts')
    {
        header('Location: ' . $url);
    }

    function loadView($view) {
        $view = str_replace('.', '/', $view);

        return require_once __DIR__ . '/Views/' . $view . '.php';
    }