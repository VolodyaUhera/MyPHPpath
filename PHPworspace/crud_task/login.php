<?php
require_once "pdo.php";
session_start();
echo "<pre>";
print_r($_POST);
echo "</pre>";
if ( isset($_POST['email']) && isset($_POST['pass'])) {
    if (strlen($_POST['email']) < 1 || strlen($_POST['pass']) < 1) {
        $_SESSION['error'] = "Miss data";

        header("Location: add.php");
        return;
    }

    if ($_POST['email'] == "umsi@umich.edu" && $_POST['pass'] == "php123"){
        $_SESSION['succses'] = "Log in successful";
        $_SESSION['name'] = $_POST['email'];
        header("Location: alarmtest.php");
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
    <title>Document</title>
</head>
<body>
<h2>This is add form</h2>
<form method="post">
    <p>Email <input type="text" name="email"></p>
    <p>Password <input type="password" name="pass"></p>
    <input type="submit" value="Submit">
</form>
<?php
if ( isset($_SESSION['error']) ) {
    echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
    unset($_SESSION['error']);
}
?>
<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

?>
</body>
</html>
