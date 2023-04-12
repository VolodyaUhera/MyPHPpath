<?php

if ( ! isset($_GET['name']) || strlen($_GET['name']) < 1  ) {
    die('Name parameter missing');
}


if ( isset($_POST['logout']) ) {
    header('Location: index.php');
    return;
}

$names = array('Rock', 'Paper', 'Scissors');
$human = isset($_POST["human"]) ? $_POST['human']+0 : -1;
$computer = rand(0,2);

function check($computer, $human) {
    // For now this is a rock-savant checking function
    // TODO: Fix this
    if ( $human == $computer ) {
        return "Tie";
    } else if ( $human == 1 AND $computer == 0 ){
        return "You Win";
    } else if ( $human == 2 AND $computer == 1 ){
        return "You Win";
    } else if ( $human == 0 AND $computer == 2 ){
        return "You Win";
    } else if ( $human == 2  and $computer == 0 ) {
        return "You Lose";
    } else if ( $human == 1  and $computer == 2) {
        return "You Lose";
    } else if ( $human == 0  and $computer == 1 ) {
        return "You Lose";
    }

    return false;
}

$result = check($computer, $human);
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
    <h1>Rock Paper Scissors</h1>
    <?php
        echo "<p>".htmlentities("Welcome:". $_GET["name"]) . "</p>";
    ?>
    <form method="post">
        <select name="human">
            <option value="-1">Select</option>
            <option value="0">Rock</option>
            <option value="1">Paper</option>
            <option value="2">Scissors</option>
            <option value="3">Test</option>
        </select>
        <input type="submit" value="Play">
        <input type="submit" value="Logout" name="logout">
        <pre>Select strategy and Play.</pre>
    </form>
    <pre>
    <?php
    if ( $human == -1 ) {
        print "Please select a strategy and press Play.\n";
    } else if ( $human == 3 ) {
        for($c=0;$c<3;$c++) {
            for($h=0;$h<3;$h++) {
                $r = check($c, $h);
                print "Human=$names[$h] Computer=$names[$c] Result=$r\n";
            }
        }
    } else {
        print "Your Play=$names[$human] Computer Play=$names[$computer] Result=$result\n";
    }
    ?>
    </pre>

    <pre>
        <?= print_r($_POST)?>
        <?= print_r($_GET)?>
    </pre>
</body>
</html>