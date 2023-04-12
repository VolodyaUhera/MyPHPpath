<!DOCTYPE html>
<html>
    <head>
        <title>Volodymyr Uhera PHP</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Volodymyr Uhera PHP</h1>
        <p>
            <?php
                print "The SHA256 hash of \"Volodymyr Uhera\" is " . hash('sha256','Volodymyr Uhera');
            ?>
        </p>
        <pre>ASCI art:

        *       *
         *     *
          *   *
           * *
            *
        </pre>
        <a href="fail.php">Click here to cause a traceback</a>
        <br>        
        <a href="check.php">Click here to check the error setting</a>        
    </body>
</html>