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
    require 'includes/classes/' . strtolower($class_name) . '.php';
}

require_once 'includes/function.php';