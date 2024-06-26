<?php
require_once 'pdo.php';

$salt = "XyZzy12*_";

$check = hash('md5', $salt.$_POST['pass']);

$stmt = $pdo->prepare('SELECT user_id, name FROM users WHERE email = :em AND password = :pw');

$stmt->execute(array( ':em' => $_POST['email'], ':pw' => $check));

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ( $row !== false ) {

    $_SESSION['name'] = $row['name'];

    $_SESSION['user_id'] = $row['user_id'];

    header("Location: index.php");

    return;
}
?>

<pre>
    <?php var_dump($_SESSION);?>
</pre>
<!DOCTYPE html>
<html>
<head>
    <title>Volodymyr Uhera's Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Please Log In</h1>
    <form method="POST" action="login.php">
        <label for="email">Email</label>
        <input type="text" name="email" id="email"><br/>
        <label for="id_1723">Password</label>
        <input type="password" name="pass" id="id_1723"><br/>
        <input type="submit" onclick="return doValidate();" value="Log In">
        <input type="submit" name="cancel" value="Cancel">
    </form>
    <p>
        For a password hint, view source and find an account and password hint
        in the HTML comments.
        <!-- Hint:
        The account is umsi@umich.edu
        The password is the three character name of the
        programming language used in this class (all lower case)
        followed by 123. -->
    </p>
    <script>
        function doValidate() {
            console.log('Validating...');
            try {
                addr = document.getElementById('email').value;
                pw = document.getElementById('id_1723').value;
                console.log("Validating addr="+addr+" pw="+pw);
                if (addr == null || addr == "" || pw == null || pw == "") {
                    alert("Both fields must be filled out");
                    return false;
                }
                if ( addr.indexOf('@') == -1 ) {
                    alert("Invalid email address");
                    return false;
                }
                return true;
            } catch(e) {
                return false;
            }
            return false;
        }
    </script>

</div>
</body>
