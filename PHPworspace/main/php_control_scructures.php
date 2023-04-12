<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <p>
        <?php
            //if 
            $ans = 42;
            if ( $ans == 42) {
                echo "Hello!\n";

            } else {
                echo "Wrong\n";
            }
        ?>
    </p>
    <p>
        <?php
            //if multi-way
            $x = 7;

            if ( $x < 2){
                echo "Small";
            } elseif ( $x < 10){
                echo "Medium";
            } else {
                echo "Large";
            }
        ?>
        echo "all done";
    </p>
    <p>
        <?php
            //while loop
            $fuel = 10;
            while ( $fuel >= 1){
                // sleep(1);
                echo "$fuel\n";
                $fuel = $fuel - 1;
                
            }
                
        ?>  
    </p>
    <h3>
        <?php
            //while do loop
            $count = 1;
            do {
                echo "$count times 5 is " . $count * 5;
                echo "\n";
            } while (++$count <= 5);
        ?>
    </h3>

    <h2>
        <?php
            for( $count=1; $count<=6; $count++) {
                echo "$count times 6 is " . $count * 6 . "\n || ";
            }
        
        ?>
    </h2>
</body>
</html>