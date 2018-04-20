<?php

/* 
 * contact.php
 * contact class file
 * @version 1.2 2018-04-19
 * @package Smithside Auctions
 * @copyright (c) 2018, Smithside Auctions
 * @license GNU General Public License
 * @since Release 1.0
 * @author Tung Pham
 */

class Contact{
    protected $first_name;
    protected $last_name;
    protected $position;
    protected $email;
    protected $phone;
    
    //function __construct($first_name, $last_name, $position, $email, $phone) {
//        $this->first_name = $first_name;
//        $this->last_name = $last_name;
//        $this->position = $position;
//        $this->email = $email;
//        $this->phone = $phone;
    //}
    
    function __construct($input) {
        if (is_array($input)) {
            foreach ($input as $key=>$val) {
                $this->$key = $val;
            }
        }
          
    }
                function getFirst_name() {
        return $this->first_name;
    }

    function getLast_name() {
        return $this->last_name;
    }

    function getPosition() {
        return $this->position;
    }

    function getEmail() {
        return $this->email;
    }

    function getPhone() {
        return $this->phone;
    }

    function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }

    function setLast_name($last_name) {
        $this->last_name = $last_name;
    }

    function setPosition($position) {
        $this->position = $position;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }
    
    /**
     * contactName function concatenates the first and the last name
     */
    public function contactName(){
        $contactName = $this->first_name . ' ' . $this->last_name;
        return $contactName;
    }
    
}

