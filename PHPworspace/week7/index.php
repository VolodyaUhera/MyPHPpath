<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD5</title>
</head>
<body>
<pre>
Debug Output:
<?php
$goodtext = "Not found";
// If there is no parameter, this code is all skipped
if ( isset($_GET['md5']) ) {
    $time_pre = microtime(true);
    $md5 = $_GET['md5'];
    // This is our alphabet
    $txt = "0123456789";
    $show = 15;
    // Outer loop go go through the alphabet for the
    // first position in our "possible" pre-hash
    // text
    for($i=0; $i<strlen($txt); $i++ ) {
        $ch1 = $txt[$i];   // The first of two characters
        // Our inner loop Note the use of new variables
        // $j and $ch2 
        for($j=0; $j<strlen($txt); $j++ ) {
            $ch2 = $txt[$j];  // Our second character
            for($k=0; $k<strlen($txt); $k++ ) {
                $ch3 = $txt[$k];
                for($l=0; $l<strlen($txt); $l++){
                    $ch4 = $txt[$l];
                    // Concatenate the two characters together to 
                    // form the "possible" pre-hash text
                    $try = $ch1.$ch2.$ch3.$ch4;
                    // Run the hash and then check to see if we match
                    $check = hash('md5', $try);
                    if ( $check == $md5 ) {
                        $goodtext = $try;
                        break;   // Exit the inner loop
                    }
                    // Debug output until $show hits 0
                    if ( $show > 0 ) {
                        print "$check $try\n";
                        $show = $show - 1;
                    }
                    if($goodtext == $try){
                        break;
                    }
                }
                if($goodtext == $try){
                    break;
                }
            }
            if($goodtext == $try) {
                break;  
            }
        }
        if($goodtext == $try){
            break;
        }
    }
    // Compute ellapsed time
    $time_post = microtime(true);
    print "Ellapsed time: ";
    print $time_post-$time_pre;
    print "\n";
}
?>
</pre>
    
    
    
    
    
    <h1>MD5 cracker</h1>
    <p>
        This application takes an MD5 hash
        of a four digit pin and check all 10,000
        possible four digit PINs to determine the PIN.
    </p>
    <form>
        <input type="text" name="md5" size="40">
        <input type="submit" value="Crack MD5"/>
    </form>
    <a href="index.php">Reset this page</a>
    <p>Original Text: <?= htmlentities($goodtext); ?></p>

</body>
</html>