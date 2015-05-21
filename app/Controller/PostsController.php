<?php

    class PostsController extends Controller
    {

        protected $url = 'post';

        public function index()
        {
            $this->loadModel('Post');
            $posts = $this->post->all();

            return $this->loadView('posts.index', compact('posts'));
        }

        public function show()
        {
            $this->loadModel('Post');
            $post = $this->post->find($this->id);

            return $post ? $this->loadView('posts.show', compact('post')) : redirectTo();

        }

        public function create()
        {
            return $this->loadView('posts.create');
        }

        public function store()
        {
            $this->loadModel('Post');

            $posts = $this->post->create([
                ':title' => $_POST['title'],
                ':body' => $_POST['body']
            ]);

            return redirectTo();
        }

        public function edit()
        {
            $this->loadModel('Post');
            $post = $this->post->find($this->id);

            return $post ? $this->loadView('posts.edit', compact('post')) : redirectTo();
        }

        public function update()
        {
            $this->loadModel('Post');

            $this->post->update($this->id ,[
                ':title' => $_POST['title'],
                ':body' => $_POST['body']
            ]);

            return redirectTo();
        }

        public function delete()
        {
            $this->loadModel('Post');

            $posts = $this->post->delete($this->id);

            return redirectTo();
        }
    }