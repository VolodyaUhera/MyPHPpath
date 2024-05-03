<?php

$host = 'localhost';
$db = 'project';
$user = 'root';
$password = null;

try {
    // Construct the DSN
    $dsn = "mysql:host=$host;dbname=$db";

    // Create a new PDO instance
    $pdo = new PDO($dsn, $user, $password);

    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // If an exception occurs, catch it and echo the error message
    echo "Connection failed: " . $e->getMessage();
}


