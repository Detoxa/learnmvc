<?php
    class Pages extends Controller {
        public function __construct(){
           
        }

        public function index(){
            
            $data = [
                'title' => 'Simple MVC PHP framework',
            ];
            
            $this->view('pages/index', $data);
        }

        public function about(){
            $data = [
                'title' => 'About'
            ];

            $this->view('pages/about' , $data);
        }
    }