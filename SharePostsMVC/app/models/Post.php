<?php
class Post {
    private $db;
    
    public function __construct() {
        $this->db = new Database;
    }
    
    public function getPosts() {
        $sql =    "SELECT *, posts.id as postId, posts.created_at as postCreated "
                . "FROM posts "
                . "INNER JOIN users on posts.user_id = users.id "
                . "ORDER BY posts.created_at DESC;";
        $this->db->query($sql);
        $results = $this->db->resultSet();
        
        return $results;
    }
    
    public function addPost($data) {
        $sql = "INSERT INTO posts (user_id, title, body) VALUES (:user_id, :title, :body);";
        $this->db->query($sql);
        // Bind values
        $this->db->bind(":user_id", $data["user_id"]);
        $this->db->bind(":title", $data["title"]);
        $this->db->bind(":body", $data["body"]);
        
        // Execute
        return $this->db->execute();
    }
    
    public function getPostById($id) {
        $sql = "SELECT * FROM posts WHERE id = $id";
        $this->db->query($sql);
        $row = $this->db->single();
        return $row;
    }
}
