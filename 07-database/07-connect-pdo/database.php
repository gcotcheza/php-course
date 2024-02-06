<?php 

$host = 'localhost';
$port = '3306';
$dbName = 'blog';
$userName = 'root';
$password = '';

$dsn = "mysql:host={$host};port{$port};dbName{$dbName};charset=utf8";

try {
    // create PDO instance
    $pdo = new PDO($dsn, $userName, $password);

    // Set PDO to throw exceptions on error.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo 'Connection Failed ' . $e->getMessage();  
}

?>