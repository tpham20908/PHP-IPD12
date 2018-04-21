<?php

class Pages extends Controller {

    public function __construct() {
        
    }

    public function index() {
        $data = [
            "title" => "Share Posts",
            "description" => "Social network build on the PHP MVC and Bootstrap Framework"
        ];
        
        
        $this->view("pages/index", $data);
    }

    public function about() {
        $data = [
            "title" => "About us",
            "description" => "App to share posts with other users"
        ];
        $this->view("pages/about", $data);
    }
}