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
}
