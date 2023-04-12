 <!DOCTYPE html>
 <html>
    <head>
        
    </head>
    <body>
        <p>

        <?php

        $abc = 12;
        $y = $abc + 5;
        echo "The y = ".$y."\n"." hello boooooois";
        
        ?>

        </p>

        <p>
            
            <?php
            //increment decrament
            $x = 12;
            echo "x = $x\n";
            
            $y = 15 + $x++;
            echo "y = $y\n";
            
            echo "x is $x and y is $y \n";

            ?>
        </p>
        
        <p>
            <?php
            //Ternary operands
                $www = 123;
                $msg = $www > 100 ? "Large" : "Small" ;
                echo "First: $msg \n";
            ?>
        </p>
        <p>
            <?php
                $msg = ($www % 2 == 0) ? "Even" : "Odd";
                echo "Second: $msg \n";
            ?>
        </p>

        <p>
            <?php
                $msg = ($www % 2) ? "Even" : "Odd";
                echo "Third: $msg \n";
            ?>
        </p>

        <p>
            <?php
            //side effect assigment
            $out = "hello";
            $out = $out . " ";
            $out .= "World!";
            $out .= "\n";
            $count = 0;
            $count += 1;
            
            echo "$out";
            ?>
        </p>

        <p>
            <?php
            //Conversion / Casting
            $a = 56;
            $b = 12;
            $c = $a / $b;
            echo "c = $c \n";
    
            ?>
            
            <?php
            $d = "100" + 36.25 + TRUE;
            echo "D: ". $d . "\n";
            echo "D2: ". (string) $d . "\n";
            ?>

            <?php
            $e = (int) 9.9 - 1;
            echo "E: $e\n";
            ?>

            <?php
            $f = "sam" + 25;
            echo "F: $f";
            ?>

            <?php
            $g = "sam" . 25;
            echo "G: $g";
            ?>

        </p>

        <p>
            <?php
            //casting
            echo "A".False."B\n";
            echo "x".True."Y\n";
            ?>
        </p>

        <p>
            <?php
            
            if ( 123 == "123") print("Equality 1\n");
            if ( 123 == "100"+23) print("Equality 2\n");
            if ( FALSE == "0") print("Equaliti 3\n");
            if ( (5 < 6) == "2"-"1") print("Equaliti 4\n");
            if ( (5 < 6) === TRUE ) print("Equaliti 5\n");
            ?>
        </p>

        <p>
            <?php
                $vv = "Hello World!";
                echo "First " . strpos($vv, "Wo") . "\n";
                echo "Second " . strpos($vv, "He") . "\n";
                echo "Third " . strpos($vv, "ZZ") . "\n";
                if (strpos ($vv, "He") == FALSE) echo "Wrong A\n";
                if (strpos ($vv, "ZZ") == FALSE) echo "Right B\n";
                if (strpos ($vv, "He") !== FALSE) echo "Right C\n";
                if (strpos ($vv, "ZZ") === FALSE) echo "Right D\n";
                print_r(FALSE); print FALSE;
                echo "Where were they?\n";
            ?>
        </p>

    </body>
 </html>