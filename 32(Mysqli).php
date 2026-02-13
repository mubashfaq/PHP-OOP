<?php

class Connection
{
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "", "test");

        if($this->conn->connect_error ){
            die("Connection failed " . $this->conn->connect_error);
        }
    }

    public function getUsers()
    {
        $sql = "SELECT * FROM users";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
           while( $row = $result->fetch_assoc()){
            echo "ID : {$row["id"]} - Name : {$row["name"]} ";
           }
        }
    }


}

$obj = new connection();
$obj->getUsers();
