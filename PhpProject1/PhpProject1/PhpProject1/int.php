<?php
function __autoload($class_name) {
    try {
        $class_file = "includes/classes/" . strtolower($class_name) . ".php";
        if (is_file($class_file)) {
            require_once $class_file;
        } else {
            throw new Exception("Unable to load class $class_name in fiel $class_file");
        }
    } catch (Exception $ex) {
        echo "Exception caught: " . $e->getMessage() . "\n";
    }
}

