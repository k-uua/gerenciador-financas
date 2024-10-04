<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "gerenciadordefinancas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, 8081);
// Check connection
if ($conn->connect_error) {
    die("Falha na conexão! " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) !== TRUE) {
    echo "Error creating database: " . $conn->error;
}

?>