<?php
echo "<pre>\n";
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=misc',
    'boy', '1');

$stmt = $pdo->query("SELECT * FROM users");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($rows);

echo "</pre>\n";
