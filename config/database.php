<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'sonwar');
define('DB_PASS', '=04Rhino');
define('DB_NAME', 'PHP_FIRST');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}
// echo 'Connected successfully';