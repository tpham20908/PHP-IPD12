<?php
    class User {
        public $name;
        public $age;
        public static $minPassLength = 6;
        
        public static function validatePass($pass) {
            return strlen($pass) >= self::$minPassLength;
        }
    }
    
    $pwd = "Hello";
    
    echo User::validatePass($pwd) ? "Password valid." : "Password NOT valid.";