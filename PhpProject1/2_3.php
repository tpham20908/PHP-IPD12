<?php 
    // Define a class
    class User {
        // Properties (attributes)
        public $name = "Brad";
        // Methods (functions)
        public function sayHello() {
            return $this->name . " says Hello";
        }
    }

    // Instantiate a user object from User class
    $user1 = new User();

    echo $user1->name . "<br>";
    echo $user1->sayHello();
