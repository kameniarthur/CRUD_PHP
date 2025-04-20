<?php
    class Database{
        private $host = "127.0.0.1";
        private $user = "root";
        private $password = "";
        private $conn;
        private $db = "systeme";

        public function connect() : PDO {
            if(!$this->conn){
                $dns = "mysql:host=this->$host;dbname=this->$db;charset=utf8mb4";
                $option = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ];
                $this->$conn = new PDO($dns, $this->$user, $this->$password, $option);
            }
            return $conn;
        }
    }