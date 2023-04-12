<?php

require_once 'pdo.php';

if ( isset( $_POST['name'] ) && isset( $_POST['email'] ) && isset( $_POST['password'] ) ) {
    $sql = "INSERT INTO users (name, email , password) VALUES (:name, :email, :password)";

   $stmt = $pdo ->prepare($sql);

   $stmt->execute(array(
           ':name' => $_POST['name'],
           ':email' => $_POST['email'],
           ':password' => $_POST['password']
   ));

}

if ( isset($_POST['user_id']) ) {
    $sql ="DELETE FROM users WHERE user_id= :zip";

    $stmt = $pdo->prepare($sql);

    $stmt->execute(array(
            ':zip' => $_POST['user_id']
    ));
}

?>
<?php
foreach ($_POST as $key => $value) {
    unset($_POST[$key]);
}
?>
<?php

echo '<pre>';

print_r($_POST);
echo "<br>";
print_r($_GET);

echo "</pre/n>";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PostForm</title>
</head>
<body>
    <p>Add a new user</p>
    <form method="post">
        <p>Name: <input type="text" name="name" size="40"></p>
        <p>Email: <input type="text" name="email"></p>
        <p>Password: <input type="password" name="password"></p>
        <p> <input type="submit" value="Add New"></p>
    </form>
    <p>Delete User</p>
    <form method="post">
        <p>ID to delete: <input type="text" name="user_id"></p>
        <input type="submit" value="delete">
    </form>
</body>
</html>



<pre>
<?php

$data = $pdo->query("SELECT * FROM users");

while ( $row = $data->fetch(PDO::FETCH_ASSOC)) {
    print_r($row);
}
?>
</pre>
