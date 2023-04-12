<?php
$hostname = "localhost";
$dbName = "misc";
$userName = "boy";
$pass = "1";

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$dbName", $userName, $pass);
} catch (PDOException $e) {
    echo "Connection failed: ". $e->getMessage();
}

?>


