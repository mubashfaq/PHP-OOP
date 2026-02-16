<?php

include 'database.php';

$obj = new Database();

$obj->insert('users', ['name' => 'Ali', 'email' => 'alijutt@gmail.com', 'password' => 45678]);