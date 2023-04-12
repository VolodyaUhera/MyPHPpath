<?php
$hostName = "localhost";
$dbName = "misc32";
$userName = "boy";
$password = "1";

try {
    $pdo = new PDO("mysql:host=$hostName;dbname=$dbName", $userName, $password);
//    echo "Niiiiiiiiiiiiiice";
} catch (PDOException $e) {
    echo "Connection failed" . $e->getMessage();
}
