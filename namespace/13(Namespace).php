<?php
// Namespace is use to prevent class conflicts in different files
// require 'test.php';
require 'index.php';

use OOP\index as inndex;
$obj = new inndex\Test();
$obj = new inndex\calc();

$obj->sum(10, 5);