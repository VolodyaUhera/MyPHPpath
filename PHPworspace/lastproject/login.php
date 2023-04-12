<?php
if ( isset($_POST['cancel'] ) ) {
    // Redirect the browser to game.php
    header("Location: index.php");
    return;
}
$name = isset($_POST['who']) ? $_POST['who'] : '';
$pass = isset($_POST['pass']) ? $_POST['pass'] :'';

$salt = 'XyZzy12*_';
$stored_hash = md5($salt.'php123');


$failure = false;

if ( isset($_POST['who']) && isset($_POST['pass']) ) {
    if (strlen($_POST['who']) < 1 || strlen($_POST['pass']) < 1) {
        $failure = "User name and password are required";
    } else {
        $check = hash('md5',$salt.$pass);
        if ($check == $stored_hash) {
            header("Location: game.php?name=".$name);
        } else {
            $failure = "incorrect password";
        }
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
    <title>Log in</title>
</head>
<body>
    <h1>Please log in</h1>
    <p style="color: red">
        <?php
        if ( $failure !== false) {
            echo htmlentities($failure);
        }
        ?>

    </p>
    <form method="post">
        <label for="who">User Name</label>
        <input type="text" name="who" id="nam">
        <br>
        <label for="pass">Password</label>
        <input type="text" name="pass" id="pass">
        <br>
        <input type="submit" value="Log in">
        <input type="submit" name="cancel" value="Cancel">
    </form>

    <pre>
        <?php
            print_r($_POST);
            echo '<br>';
            print_r($_GET);
        ?>
    </pre>
</body>
</html>