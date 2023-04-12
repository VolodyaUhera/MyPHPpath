<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML_injection</title>
</head>
<body>
    <?php
    $oldguess = isset($_POST['guess']) ? $_POST['guess'] : '';
    echo htmlentities($oldguess);
    $a = htmlentities($oldguess);
    echo $a;
    echo '<br>';
    echo $oldguess;
    ?>

    <p>Guessing game...</p>

    <form method="post">
        <p>
            <label for="guess">Input Guess</label>
            <input type="text" name="guess" id="guess" size="40" value="<?= htmlentities($oldguess) ?>">
            <input type="submit">
        </p>
    </form>

    <pre>
        <?php
            print_r($_GET); echo '<br>';
            print_r($_POST);
        ?>
    </pre>

</body>
</html>


