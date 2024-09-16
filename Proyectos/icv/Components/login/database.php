<?php

$server = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'icv_database';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>