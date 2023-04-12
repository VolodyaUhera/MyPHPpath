<?php
session_start();
require_once "pdo.php";
//$_SESSION['name'] = "php";
if (!isset($_SESSION['name'])){
    die("Not logged in");
    exit();
}

if (!empty(array_filter($_POST, 'strlen')) && isset($_POST['make'], $_POST['year'], $_POST['mileage'])) {

    if (is_numeric($_POST['year']) && is_numeric($_POST['mileage'])){
        $smtm = $pdo->prepare("INSERT INTO autos (`make`, `year`, `mileage`) VALUES (:m ,:y, :mi)");


        $smtm->execute(array(
            ':m' => $_POST['make'],
            ':y' => $_POST['year'] + 0,
            ':mi' => $_POST['mileage'] + 0
        ));

        $_SESSION['success'] = "Record Inserted";
        header("Location: view.php");
        return;

    } else {
        header("Location: add.php");
        echo "year and mileage must be numeric";
        return;
    }


}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>d91fd87c</title>
</head>
<body>
<h1>Tracking Autos for <?php echo ($_SESSION['name']);?></h1>
<form method="post">
    <p><label>Make: </label> <input type="text" name="make" size="40"></p>
    <p><label>Year: </label><input type="text" name="year"></p>
    <p><label>Mileage: </label><input type="text" name="mileage"></p>
    <input type="submit" value="Add New"> <input type="submit" name="cancel" value="cancel">
</form>
</body>
</html>

