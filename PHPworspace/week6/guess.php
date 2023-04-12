<!DOCTYPE html>
<html lang="en">
<head>
    <title>202af420</title>
</head>
<body>
    <h1>Welcome to my guessing game</h1>
    <p>
        <?php
        
            $x = $_GET['guess'];

            if (array_key_exists('guess',$_GET) === FALSE) {
                echo "Missing guess parameter";
            }


            if (is_numeric($x) === FALSE) {
                echo "Your guess is not a number";
            }

            if  ((empty($x) == "") && (empty($x) != 0)) {
                echo "Your guess is too short";
                
            }

            if (($x <= 59) && ($x != "")) {
                echo "Your guess is too low";
            } elseif ( $x >= 61 && ($x != "")) {
                echo "Your guess is too high";
            } elseif ( $x == 60 && ($x != "")) {
                echo "Congratulations - You are right";
            }

        ?>
    </p>    
</body>
</html>