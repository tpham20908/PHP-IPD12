<?php

class Pages extends Controller {

    public function __construct() {
        
    }

    public function index() {
        if (isLoggedIn())
            redirect("posts");
        
        $data = [
            "title" => "Share Posts",
            "description" => "Social network build on the PHP MVC and Bootstrap Framework"
        ];
        
        
        $this->view("pages/index", $data);
    }

    public function about() {
        $data = [
            "title" => "About me",
            "description" => "Building app to share posts with other users"
        ];
        $this->view("pages/about", $data);
    }
}