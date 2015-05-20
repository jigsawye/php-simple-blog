<?php

    class Router
    {
        private $request_params;
        private $request_uri;
        private $request_method;
        private $status;

        public function __construct()
        {
            $path_info = $_SERVER['PATH_INFO'];

            if ($path_info != '/') {
                $path_info = substr($path_info, 1);
                $uri = preg_replace('/[0-9]+/', ':id', $path_info);
                $params = explode('/', $path_info);
            }
            else {
                $uri = $path_info;
            }

            $this->request_params = $params;
            $this->request_uri = $uri;
            $this->request_method = $_SERVER['REQUEST_METHOD'];
        }

        public function get($uri, $action)
        {
            $this->checkRoute('GET', $uri, $action);
        }

        public function post($uri, $action)
        {
            $this->checkRoute('POST', $uri, $action);
        }

        public function any($function)
        {
            return $this->status ? false : $function();
        }

        private function checkRoute($method, $uri, $action)
        {
            if (($this->request_method == $method) && ($this->request_uri == $uri))
            {
                $this->loadAction($action);
            }
        }

        private function loadAction($action)
        {
            require_once __DIR__ . '/../Controller/' . $action[0] . '.php';
            $this->status = true;

            $controller = new $action[0]($this->request_params);
            return $controller->{$action[1]}();
        }

    }