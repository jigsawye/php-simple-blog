<?php
    class Controller
    {
        protected $id;

        protected $url = '';

        public function __construct($params)
        {
            if (count($params) >= 2) {
                if (preg_match('/[0-9]+/', $params[1])) {
                    $this->id = $params[1];
                }
            }
        }

        protected function redirectTo($url = URL)
        {
            return header('Location: ' . $url);
        }

        protected function loadView($view, $data)
        {
            $view = str_replace('.', '/', $view);

            extract($data);

            return require_once __DIR__ . '/../Views/' . $view . '.php';
        }

        protected function loadModel($model)
        {
            require_once __DIR__ . '/../Model/' . $model . '.php';
            $lowerCase = strtolower($model);

            $this->$lowerCase = new $model;
        }
    }