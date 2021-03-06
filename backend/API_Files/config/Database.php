<?php
    class Database {
        private $hostname = 'localhost' ;
        private $database = 'Coronadb' ;
        private $username = 'user' ;
        private $password = 'Im7654321' ;
        private $conn;

        public function connect() {
            $this -> conn = null;

            try {
                // Create Connection
                $this -> conn = new PDO(
                    "mysql:host={$this -> hostname};".
                    "dbname={$this -> database}",
                    $this -> username,
                    $this -> password
                );
                
                // Set Error Mode
                $this -> conn -> setAttribute(
                    PDO::ATTR_ERRMODE, 
                    PDO::ERRMODE_EXCEPTION
                );

            } catch (PDOException $e) {
                echo 'Connection Failed: ' . $e -> getMessage();
            }
            return $this -> conn;
        }
    }
?>
