<?php

    class Model
    {
        protected $db;
        protected $sql = '';
        protected $params = [];

        public function __construct()
        {
            $this->db = new PDO( DB . ':host=' . HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USERNAME, DB_PASSWORD);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        public function get()
        {
            $st = $this->db->prepare($this->sql);

            $st->execute($this->params);

            return $st->fetchAll(PDO::FETCH_ASSOC);
        }
    }