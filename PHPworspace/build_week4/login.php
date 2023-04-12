<?php
session_start();

 if ( isset($_POST['email']) && isset($_POST['pass'])) {
     if (empty($_POST['email']) === true && empty($_POST['pass']) === true) {
         $_SESSION['error'] = "Users name and password are required";
         header("Location: login.php");
         return;
     } elseif (strpos($_POST['email'], "@") == false) {
         $_SESSION['error'] = "Email must have an at-sign (@)";
         header("Location: login.php");
         return;
     } else {
         if ($_POST['pass'] == 'php123') {
             error_log("Login success" .$_POST['email']);
             $_SESSION['success'] = "Login success";
             $_SESSION['name'] = $_POST['email'];
             header("Location: views.php");
             return;
         } else {
             $hash = hash('sha256',$_POST['pass']);
             error_log("Login fail" . $_POST['pass']."$hash");
             $_SESSION['error'] = "Incorrect password";
             header("Location: login.php");
             return;
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
    <title>d91fd87c</title>
</head>
<body>
<h1>Please Login</h1>
<?php
    if (isset($_SESSION['error'])) {
        echo ('<p style="color: red;">'.htmlentities($_SESSION['error']). "</p>");
    }
?>

<form method="post">
    <p>
        <label>User name </label><input type="text" name="email">
    </p>
    <p>
        <label>Password </label><input type="text" name="pass">
    </p>

        <input type="submit" value="Log In">
<!--        <a href="--><?php //echo($_SERVER['PHP_SELF']);?><!--">Refresh</a>-->


</form>
</body>
</html>