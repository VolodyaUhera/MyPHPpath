<?php
require_once "pdo.php";
session_start();

if (!  isset($_SESSION['succses'])){
    die("ACCESS DENIED");
}

if ( isset($_POST['make']) &&  isset($_POST['model']) &&  isset($_POST['year']) &&  isset($_POST['mileage'])) {

    if (strlen($_POST['make']) < 1 || strlen($_POST['model']) < 1 || strlen($_POST['year']) < 1 || strlen($_POST['mileage']) < 1) {
        $_SESSION['error'] = 'You require all data';
        header("Location: add.php");
        return;
    }

    $sql = "INSERT INTO autos (make,model,year,mileage) 
                values (:make,:model,:year,:mileage)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':make' => $_POST['make'],
        ':model' => $_POST['model'],
        ':mileage' => $_POST['mileage'],
        ':year' => $_POST['year']
    ));
    header("Location: index.php");
    return;


}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Add some data</h2>
    <form method="post">
        <p>Make <input type="text" name="make" required="required" ></p>
        <p>Model <input type="text" name="model" required="required"></p>
        <p>Year <input type="number" name="year" required="required"></p>
        <p>Mileage <input type="number" name="mileage" required="required"></p>
        <input type="submit" value="Submit">
    </form>
    <?php
    if ( isset($_SESSION['error']) ) {
        echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
        unset($_SESSION['error']);
    }
    ?>
    <pre>
        <?php
            print_r($_POST);
        ?>
    </pre>
</body>
</html>
