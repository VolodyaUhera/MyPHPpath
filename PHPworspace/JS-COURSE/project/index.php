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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>