<?php

require_once "pdo.php";

$stmt = $pdo->query("SELECT * FROM users LIMIT 1");

echo "<pre>\n";
while ( $row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    print_r($row);
}
echo "</pre>\n";

echo "<table border='1'>";

$stmt = $pdo->query("SELECT name, email, password FROM users");

while ( $row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    echo "<tr><td>";
    echo ($row['name']);
    echo '</td><td>';
    echo ($row['email']);
    echo '</td><td>';
    echo  ($row['password']);
    echo '</td></tr>';

}

echo '</table>';

?>