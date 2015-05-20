<?php

    class PagesController extends Controller
    {
        public function home()
        {
            $this->loadView('pages.home');
        }

        public function about() {
            $this->loadView('pages.about');
        }

        public function search()
        {
            $this->loadView('pages.search');
        }

    }