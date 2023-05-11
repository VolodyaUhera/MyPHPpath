<?php
require_once "pdo.php";
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <h1>Welcome to the Automobiles Database</h1>
    <?php
        if (! isset($_SESSION['name'])) {
            echo "<p><a href='login.php'>Please log in</a></p>";
        } else {
            if ( isset($_SESSION['error']) ) {
                echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
                unset($_SESSION['error']);
            }
            if ( isset($_SESSION['success']) ) {
                echo '<p style="color:green">'.$_SESSION['success']."</p>\n";
                unset($_SESSION['success']);
            }

            $sql = $pdo->query("SELECT * FROM autos");

//            $stmt = $sql->fetch(PDO::FETCH_ASSOC); move pointer by 1 row if i do it

            if ($sql->rowCount() == 0) {
                echo "No rows found";
            } else {

                echo "<table border='1'>";
                while ( $stmt = $sql->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr><td>";
                    echo (htmlentities($stmt['make']));
                    echo "</td><td>";
                    echo (htmlentities($stmt['model']));
                    echo "</td><td>";
                    echo (htmlentities($stmt['year']));
                    echo "</td><td>";
                    echo (htmlentities($stmt['mileage']));
                    echo "</td></tr>";
                }
                echo "</table>";
            }
        }
    ?>
    <p> <a href="add.php">Add New Entry</a></p>
    <p><a href="logout.php">Logout</a>
</body>
</html>