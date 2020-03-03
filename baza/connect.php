<?php
$host = 'mysql:host=localhost; dbname=test';
$username = 'root';
$password = '';
$error = [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION];

try {
    $conn = new PDO($host, $username, $password, $error);
}catch (PDOException $e){
    echo $e->getMessage();
}


$table = "CREATE TABLE IF NOT EXISTS `users` (
id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL,
surname VARCHAR(100) NOT NULL,
email VARCHAR(100) UNIQUE NOT NULL,
password VARCHAR(100) NOT NULL,
birthday TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$conn->exec($table);

