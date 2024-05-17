<?php
session_start();
$_SESSION['name'] = 1;
$_SESSION['id'] = 1;

var_dump($_SESSION['name']);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php require_once 'bootstrap.php';?>
</head>
<body>
<div class="container">
    <h1>Volodymyr Uhera's Resume Registry</h1>

    <?php
        if (isset($_SESSION['success'])) {
            echo('<p style="color: green;">' . htmlentities($_SESSION['success']) . "</p>\n");
            unset($_SESSION['success']);
        }
    ?>
    <?php
    if (!isset($_SESSION['name']) or !isset($_SESSION['id'])){?>

    <p><a href="login.php">Please log in</a></p>

    <?php } else {?>
        <p><a href="logout.php">Log out</a></p>
        <p><a href="add.php">Add New Entry</a></p>
    <?php } ?>
</div>
</body>
</html>