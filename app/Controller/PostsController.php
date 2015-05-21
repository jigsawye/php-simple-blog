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

            return $this->loadView('posts.show', compact('post'));
        }

        public function create()
        {
            return $this->loadView('posts.create');
        }

        public function store()
        {
            $this->loadModel('Post');

            $posts = $posts->create([
                'title' => $_POST['title'],
                'body' => $_POST['body']
            ]);

            return redirectTo();
        }

        public function edit()
        {
            return $this->loadView('posts.edit');
        }

        public function update()
        {
            $this->loadModel('Post');

            $posts->update($this->id ,[
                'title' => $_POST['title'],
                'body' => $_POST['body']
            ]);

            return redirectTo();
        }

        public function delete()
        {
            $this->loadModel('Post');

            $posts = $posts->delete($id);

            return redirectTo();
        }
    }