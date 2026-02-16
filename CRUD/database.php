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

    public function insert($table, $params = array())
    {
        if ($this->tableExists($table)) {

            $column = implode(",", array_keys($params));
            $values = implode("','", array_values($params));

            $sql = "INSERT INTO $table ($column) VALUES ('$values')";

            $result = $this->conn->query($sql);
            
            if($result){
                echo "Record created Successfully";
            }else{
                echo "Record not created";
            }
        }
    }

    public function delete() {}

    public function update() {}

    // public function 

    private function tableExists($table)
    {
        $sql = "SHOW TABLES LIKE '$table'";
        $tableInDb = $this->conn->query($sql);
        if ($tableInDb) {
            if ($tableInDb->num_rows == 1) {
                return true;
            } else {
                echo "$table does not exist";
                return false;
            }
        }
    }

    public function __destruct()
    {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}
