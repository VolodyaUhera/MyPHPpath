<?php
session_start();
if ( isset($_POST['guess'])) {
    $guess = $_POST['guess'] + 0;
    $_SESSION['guess'] = $guess;
    header("Location: PRR.php");
    return;
}
?>
<html>
<body>
<?php
$guess = isset($_SESSION['guess']) ? $_SESSION['guess'] : '';
$message = isset($_SESSION['message']) ? $_SESSION['message'] : false;
?>
<p>Guessing game...</p>
<?php
    if ( $message !== false) {
        echo ("<p>$message</p>\n");
    }
?>
<form method="post">
    <p>
    <label for="guess">Input Guess</label>
    <input type="text" name="guess" id="guess" size="40">
    <?php
    echo ('value="' . htmlentities($guess) . '"');
    ?>
    <input type="submit">
    </p>
</form>
</body>
</html>
