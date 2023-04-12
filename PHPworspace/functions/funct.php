<!DOCTYPE html>
<html lang="en">
<head>
    <title>Functions</title>
</head>
<body>
    <pre>
        <?php
        //some base str func
            echo "<ol>";
                echo "<li>";
                    echo strrev(" .dlrow olleH");
                echo "</li>";
                echo "<li>";
                    echo str_repeat("HIP", 2);
                echo "</li>";
                echo "<li>";
                    echo strtoupper("hooray!");
                echo "</li>";
                echo "<li>";
                    echo strlen("HIP");
                echo "</li>";
            echo "</ol>";
        ?>
    </pre>

    <pre>
        <?php
            echo "<p>";
                function greet() {
                    print "Hello\n";
                }
                greet();
            echo "</p>";
        ?>
    </pre>
    <pre>
        <?php
            function greeting() {
                return "hello";
            }

            echo "<p>";
                print greeting() . " Glenn\n";
                print greeting() . " Sally\n";

            echo "</p>";
        ?>
    </pre>
    <pre>
        <?php
            //optional arguments
            function howdy($lang='es') { 
                if ( $lang == 'es') return "Hola ";
                return "hello ";
            }
            echo "<p>";
                print howdy('es') . "Glenn\n";
                print howdy('xxx') . "Quiq\n";
                print howdy() . "Geek\n";

            echo "</p>";
        ?>
    </pre>
    <pre>
        <?php
            function double($alias) {
                $alias = $alias * 2;
                return $alias;
            }
            $val = 10;
            $dval = double($val);
            echo "Value = $val Doubled = $dval\n";
        ?>
        <?php 
            function triple(&$x) {
                $x = $x * 3;
            }
            $val = 10;
            triple($val);
            echo "Triple = $val\n";
        ?>
    </pre>

    <pre>
        <?php
            if (function_exists("array_combine")) {
                echo "Exist";
            } else {
                echo "does not Exist";
            }
        ?>
    </pre>
</body>
</html>