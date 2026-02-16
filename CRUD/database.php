<?php

class Database
{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "test";
    private $conn;

    public function __construct()
    {
        if (!$this->conn) {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);

            if ($this->conn->connect_error) {
                die("Connection failed " . $this->conn->connect_error);
                // throw new Exception("Connection failed: " . $this->conn->connect_error);
            }
        }
    }

    public function insert()
    {
   
    }

    public function delete()
    {

    }

    public function update()
    {
        

    }

    // public function 

    public function __destruct()
    {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}
