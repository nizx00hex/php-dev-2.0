<?php 

class User {
    private PDO $db; 

    public function __construct() {
        $this->db = Database::connect();
    }

    public function create($username, $email, $password) {
        $sql = "";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            $username,
            $email,
            $password
        ]);
    }
}