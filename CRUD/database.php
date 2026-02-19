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

            if ($result) {
                echo "Record created Successfully";
            } else {
                echo "Record not created";
            }
        }
    }

    public function delete($table, $where)
    {
        if ($this->tableExists($table)) {

            $sql = "DELETE FROM $table WHERE $where";

            $result = $this->conn->query($sql);

            if ($result) {
                echo "Record Deleted Successfully";
            } else {
                echo "Record Deletion Failed";
            }
        }
    }

    public function update($table, $where, $params = array())
    {
        if ($this->tableExists($table)) {

            $args = array();
            foreach ($params as $key => $value) {
                $args[] = "$key = '$value'";
            }

            $sql = "UPDATE $table SET " . implode(',', $args) . " WHERE $where";

            $result = $this->conn->query($sql);

            if ($result) {
                echo "Record Updated Successfully";
            } else {
                echo "Record Update Failed";
            }
        }
    }

    public function select($table, $where = null, $orderBy = null, $limit = null)
    {
        if ($this->tableExists($table)) {

            $sql  = "SELECT * FROM $table";

            if (!empty($where)) {
                $sql .= " WHERE $where";
            }
        
            if (!empty($orderBy)) {
                $sql .= " ORDER BY $orderBy";
            }

            if(!empty($limit)) {
                if(isset($_GET['page'])){
                    $page = $_GET['page'];
                }else{
                    $page = 1;
                }

                $start = ($page - 1) * $limit;
                $sql .= " LIMIT $start, $limit";
            }

            $result = $this->conn->query($sql);

            if ($result && $result->num_rows > 0) {

                $rows = array();

                while ($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }

                echo '<pre>';
                print_r($rows);
                echo '</pre>';
            } else {
                return false;
            }
        }
    }

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
        }else{
            return false;
        }
    }

    public function __destruct()
    {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}
