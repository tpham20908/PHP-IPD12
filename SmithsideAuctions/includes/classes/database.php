<?php

/**
 * database class
 * Smithside Auction database
 * @author Tung Pham - IPD12
 */
class database {

    //create the properties for the user name, password, database name, host name
    private static $un = "root";
    private static $pw = "root";
    private static $db = "smithside";
    private static $hn = "localhost";
    // Database connection to hold actual connection
    private static $conn = null;

    // can use self::$property_name to access properties
    public static function getConnection() {
        // mysqli
        if (!self::$conn) {
            self::$conn = new mysqli(self::$hn, self::$un, self::$pw, self::$db);
            // check for error
            if (self::$conn->connect_error) {
                die("Connect Error: " . self::$conn->connect_error);
            }
        }
        /*
        // PDO
        try {
            $hostname = self::$hn;
            $dbname = self::$db;
            self::$conn = new PDO("mysql:host=$hostname;dbname=$dbname", self::$un, self::$pw);
            // set the PDO error mode to exception
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        */
        
        return self::$conn;
    }

    // create constructor
    public function __construct() {
        ;
    }

}
