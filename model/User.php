<?php
// models/User.php
class User {
    private DB $db;

    public function __construct(DB $db) {
        $this->db = $db;
    }

    public function all() {
        return $this->db->query("SELECT * FROM users");
    }

    public function find($id) {
        return $this->db->query("SELECT * FROM users WHERE id = ?", [$id]);
    }

    public function create($nom, $email) {
        return $this->db->query("INSERT INTO users (nom, email) VALUES (?, ?)", [$nom, $email]);
    }
}
