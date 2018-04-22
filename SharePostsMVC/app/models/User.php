<?php
class User {
    private $db;
    
    public function __construct() {
        $this->db = new Database;
    }
    
    // Register user
    public function register($data) {
        $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password);";
        $this->db->query($sql);
        // Bind values
        $this->db->bind(":name", $data["name"]);
        $this->db->bind(":email", $data["email"]);
        $this->db->bind(":password", $data["password"]);
        
        // Execute
        return $this->db->execute();
    }


    // Find user by email
    public function findUserByEmail($email) {
        $this->db->query("SELECT * FROM users WHERE email = :emal");
        // Bind value
        $this->db->bind(":emal", $email);
        $row = $this->db->single();
        
        // check row
        return $this->db->rowCount() > 0;
    }
}