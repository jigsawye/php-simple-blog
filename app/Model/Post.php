<?php

    class Post extends Model
    {
        public function all()
        {
            $this->sql = 'SELECT * FROM posts';

            return $this->get()->fetchAll(PDO::FETCH_ASSOC);
        }

        public function find($id)
        {
            $this->sql = 'SELECT * FROM posts WHERE id = :id';
            $this->params = [
                ':id' => $id
            ];
            
            return $this->get()->fetch(PDO::FETCH_ASSOC);
        }

        public function create($arr)
        {
            $this->sql = 'INSERT INTO posts (title, body) VALUES (:title, :body)';
            $this->params = $arr;

            return $this->get();
        }

        public function update($id, $arr)
        {
            $params = array_merge($arr, [':id' => $id]);

            $this->sql = 'UPDATE posts SET title = :title, body = :body WHERE id = :id';
            $this->params = $params;

            return $this->get();
        }

        public function delete($id)
        {
            $this->sql = 'DELETE FROM posts WHERE id = :id';
            $this->params = [':id' => $id];

            return $this->get();
        }
    }