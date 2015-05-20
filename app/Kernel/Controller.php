<?php
    class Controller
    {
        protected $id;

        public function __construct($params)
        {
            if (preg_match('/[0-9]+/', $params[1])) {
                $this->id = $params[1];
            }
        }

        public function loadView($view, $data) {
            $view = str_replace('.', '/', $view);

            extract($data);

            return require_once __DIR__ . '/../Views/' . $view . '.php';
        }
    }