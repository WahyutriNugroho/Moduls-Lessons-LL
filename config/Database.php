<?php

class Database
{
    // DB Params
    private $host = '127.0.0.1';
    private $db_name = 'll_lms_lessons';
    private $username = 'll_lms_lessons';
    private $password = 'a1LLCx2WtwSFutgk';
    private $conn;

    // DB Connect
    public function connect()
    {
        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }

        return $this->conn;
    }

    public function closeConn()
    {
        $this->conn = null;
    }
}
