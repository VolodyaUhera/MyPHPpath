<!DOCTYPE html>
<html lang="en">
<head>
    <title>Array Func</title>
</head>
<body>
    <h1>
        <?php
            $za = array();
            $za["name"] = "MyName";
            $za["course"] = "WA4E";

            if (array_key_exists('course', $za)) {
                echo "yes";
            } else {
                echo "no";
            }
            echo '<br>';
            echo isset($za['name']) ? "name is set" : "name is not set\n";
            echo '<br>';
            echo isset($za['addr']) ? "name is set" : "name is not set\n";
            echo '<br>';
            echo array_key_exists('course', $za) ? "yes" : "no\n";
            echo '<br>';
            
        ?>
    </h1>

    <h2>
        <?php
            $za2 = array();
            $za2["topic"] = "PHP";
            $za2["name"] = "MyName";
            $za2["course"] = "WA4E";
            

            print_r($za2);
            echo '<br>';

            // sort($za2);
            // print_r($za2); THIS IS REAL BULLSHIT
            // echo '<br>';

            ksort($za2);
            print_r($za2);
            echo '<br>';

            asort($za2);
            print_r($za2);
            echo '<br>';


        ?>
    </h2>

    <h2>
        <?php
            $inp = "THis is a sentance with seven words";
            $temp = explode(' ', $inp);
            print_r($temp);

        ?>
    </h2>

    <h1>
        HEEEEEEEEEEEEEEEEEEEELO BOOOOOOOOOOOOOOOO
    </h1>
    
</body>
</html>