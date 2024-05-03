<?php
session_start();
if (!isset($_SESSION['name']) && !isset($_SESSION['user_id']))
{
    die('Not logged in');
}

require_once "pdo.php";

if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['headline']) && isset($_POST['summary']))
{
        $stmt = $pdo->prepare('INSERT INTO Profile (user_id,first_name, last_name, email, headline, summary) VALUES (:user_id, :first_name, :last_name, :email, :headline,:summary)');
        $stmt->execute(array(
                ':user_id' => $_SESSION['user_id'],
                ':first_name' => $_POST['first_name'],
                ':last_name' => $_POST['last_name'],
                ':email' => $_POST['email'],
                ':headline' => $_POST['headline'],
                ':summary' => $_POST['summary'])
        );
        $_SESSION['success'] = "Record added.";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">
    <h1>Adding Profile for UMSI</h1>
    <script>
        function validateForm() {
            var firstName = document.forms["myForm"]["first_name"].value;
            var lastName = document.forms["myForm"]["last_name"].value;
            var email = document.forms["myForm"]["email"].value;
            var headline = document.forms["myForm"]["headline"].value;
            var summary = document.forms["myForm"]["summary"].value;

            if (firstName == "") {
                alert("First Name must be filled out");
                return false;
            }
            if (lastName == "") {
                alert("Last Name must be filled out");
                return false;
            }
            if (email == "") {
                alert("Email must be filled out");
                return false;
            }
            // Email validation regex
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert("Invalid email format");
                return false;
            }
            if (headline == "") {
                alert("Headline must be filled out");
                return false;
            }
            if (summary == "") {
                alert("Summary must be filled out");
                return false;
            }
        }
    </script>
    <div class="container">
    <form name="myForm" method="post" onsubmit="return validateForm()">
        <p>First Name:
            <input type="text" name="first_name" size="60"/></p>
        <p>Last Name:
            <input type="text" name="last_name" size="60"/></p>
        <p>Email:
            <input type="text" name="email" size="30"/></p>
        <p>Headline:<br/>
            <input type="text" name="headline" size="80"/></p>
        <p>Summary:<br/>
            <textarea name="summary" rows="8" cols="80"></textarea></p>
        <p>
            <input type="submit" value="Add">
            <input type="submit" name="cancel" value="Cancel">
        </p>
    </form>
    </div>


</div>
</body>
</html>