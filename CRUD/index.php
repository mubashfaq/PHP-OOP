<?php

include 'database.php';

$obj = new Database();

// $obj->insert('users', ['name' => 'Ali', 'email' => 'alijutt@gmail.com', 'password' => 45678]);

// $obj->update('users', 'id = "8"', ['name' => 'Ali Khan', 'email' => 'alikhan@gmail.com', 'password' => 1345678]);

// $obj->delete('users', 'id = "2"');

$obj->select('users', 'id = "5"');