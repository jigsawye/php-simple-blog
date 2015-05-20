<?php

    class PostsController extends Controller
    {
        private $post;

        public function __construct($params)
        {
            parent::__construct($params);
            
            require_once __DIR__ . '/../Model/Post.php';
            $this->post = new Post;
        }

        public function index()
        {
            $posts = $this->post->all();

            $this->loadView('posts.index', compact('posts'));
        }

        public function show()
        {
            $post = $this->post->find($this->id);
            
            return $this->loadView('posts.show', compact('post'));
        }

        public function create()
        {
            $this->loadView('posts.create');
        }

        public function store()
        {
            // $posts = $posts->create([]);
        }

        public function edit()
        {
            $this->loadView('posts.edit');
        }

        public function update()
        {
            // $posts = $posts->update([]);
        }

        public function delete()
        {
            // $posts = $posts->delete($id);
        }
    }