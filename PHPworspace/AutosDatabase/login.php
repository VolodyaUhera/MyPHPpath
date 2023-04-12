<?php
require_once "pdo.php";

if ( isset($_POST['name'] ) && isset($_POST['password'] ) ) {
    if ( empty($_POST['name']) === True  || empty($_POST["password"]) === True) {
        echo "<p style='color: red'> <b>User name and password are required</b> </p>";
    } elseif ( strpos($_POST['name'], '@') == false ) {
        echo "<p style='color: red'>Email must have an at-sign (@)</p>";
    } else {
        $sql = "SELECT name FROM users WHERE email = :em AND password = :pw";

        $stmt = $pdo->prepare($sql);

        $stmt->execute(array(
                ':em' => $_POST['email'],
                ':pw' => $_POST['password']
        ));

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        echo $row;
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
    <title>46bf9c33</title>
</head>
<body>
<h1>Please Log in</h1>
<?php



?>
<form method="post">
    <p>User name <input type="text" name="name"></p>
    <p>Password <input type="password" name="password"></p>
    <input type="submit" value="log in">
    <input type="submit" name="cancel" value="Cancel">

</form>
</body>
</html>

<pre>
    <?php
        print_r($_POST);
    ?>
</pre>