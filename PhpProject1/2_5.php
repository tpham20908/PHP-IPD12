<?php
    class User {
        private $name;
        private $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            $this->name = $name;
        }

        // __get MAGIC METHOD
        public function __get($property) {
            if (property_exists($this, $property)) {
                return $this->$property;
            }
            else {
                echo "$property does not exists.";
            }
        }
        
        // __set MAGIC METHOD
        public function __set($property, $value) {
            if (property_exists($this, $property)) {
                $this->$property = $value;
            }
            else {
                echo "$property does not exists.";
            }
            return $this;
        }
    }
    
    $user1 = new User("John", 40);

    echo $user1->setName("Jeff") . "<br>";
    echo $user1->getName() . "<br>";
    
    $user1->__set("age", 41);
    echo $user1->__get("name") . "<br>";
    echo $user1->__get("age") . "<br>";
    echo $user1->__get("firstname") . "<br>";
