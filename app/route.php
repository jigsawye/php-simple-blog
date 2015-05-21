<?php
    $route = new Router;

    $route->get('/'      , ['PagesController', 'home']);
    $route->get('about'  , ['PagesController', 'about']);
    $route->get('search' , ['PagesController', 'search']);

    // $route->get('auth/login'     , ['AuthController', 'login']);
    // $route->post('auth/login'    , ['AuthController', 'onLogin']);
    // $route->get('auth/register'  , ['AuthController', 'register']);
    // $route->post('auth/register' , ['AuthController', 'onRegister']);
    // $route->get('auth/logout'    , ['AuthController', 'logout']);

    $route->get('posts'     , ['PostsController', 'index']);
    $route->get('posts/:id' , ['PostsController', 'show']);

    // if (isset($_SESSION['username'])) {
        // $route->get('posts/create'      , ['PostsController', 'create']);
        // $route->post('posts/store'      , ['PostsController', 'store']);
        // $route->get('posts/:id/edit'    , ['PostsController', 'edit']);
        // $route->post('posts/:id/update' , ['PostsController', 'update']);
        // $route->post('posts/:id/delete' , ['PostsController', 'delete']);
    // }



    $route->any(function() {
        // loadView('404');
        return redirectTo();
    });