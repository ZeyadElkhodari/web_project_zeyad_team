<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "users_db";

$conn = new mysqli($host, $user, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$db_check = "CREATE DATABASE IF NOT EXISTS `$database`";
if ($conn->query($db_check) !== TRUE) {
    die("Database creation failed: " . $conn->error);
}
$conn->select_db($database);

?>


