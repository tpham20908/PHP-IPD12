<?php

/* 
 * init.php
 * initialization
 * @version 1.2 2018-04-19
 * @package Smithside Auctions
 * @copyright (c) 2018, Smithside Auctions
 * @license GNU General Public License
 * @since Release 1.0
 * @author Tung Pham
 */

function __autoload($class_name) {
    // require 'includes/classes/' . strtolower($class_name) . '.php';
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

require_once 'includes/function.php';