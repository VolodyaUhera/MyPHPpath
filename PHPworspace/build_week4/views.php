<?php
    session_start();
    require_once "pdo.php";

    if (!isset($_SESSION['name'])){
        die("Not logged in");
        exit();
    }
//    $_SESSION['name'] = 'php';

    if (isset($_SESSION['error'])){
        echo "<p style='color: red'>" . $_SESSION['error'] . "</p>";
        die();
    };
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
<?php
if (isset($_SESSION['success'])) {
    echo ("<p style='color: green;'>".$_SESSION['success']."</p>");
    unset($_SESSION['success']);
}
?>
<h2>Automobiles</h2>
<?php
$smtm = $pdo->query("SELECT auto_id, make,year, mileage FROM autos");

while ($row = $smtm->fetch(PDO::FETCH_ASSOC)) {
    echo "<li>";
    echo htmlentities($row['year']). " | ";
    echo htmlentities($row['make']). " | ";
    echo htmlentities($row['mileage']);
    echo "</li>";
}
?>

    <a href="add.php">Add New</a> | <a href="logout.php">Logout</a>


</body>
</html>
