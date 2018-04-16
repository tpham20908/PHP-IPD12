<?php
    class User {
        public $name;
        public $age;

        // Runs when an object is created
        public function __construct($name, $age) {
            echo "Class " . __CLASS__ . " instantiated.<br>";
            $this->name = $name;
            $this->age = $age;
        }

        public function sayHello() {
            return $this->name . " says Hello.<br>";
        }

        //Called when no other references to a certain object
        // Used for cleanup, closing connections, etc
        public function __destruct() {
            echo "<br>destructor ran...";
        }
    }

    $user1 = new User("Brad", 41);
    echo $user1->name . " is " . $user1->age . " years old.<br>";
    echo $user1->sayHello();

    $user2 = new User("Louis", 19);
    echo $user2->name . " is " . $user2->age . " years old.<br>";
    echo $user2->sayHello();