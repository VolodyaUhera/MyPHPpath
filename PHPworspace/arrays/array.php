<!DOCTYPE html>
<html lang="en">
<head>
    <title>Array</title>
</head>
<body>
    <h1>
        This is world ->
        <?php
        //array
            $stuff = array("Hi", "There");
            echo $stuff[1], "\n"; 
        ?>
        and after is nothing
    </h1>
    <h1>
        <?php
            //also array but dictionary
            $stuff2 = array ( "name" => "Chuck",
                            "course" => "WA4E");
            echo $stuff2["course"], "\n";
        ?>
    </h1>
    <h1>
    <?php
        echo "<pre>\n";
                //dumping array
                print_r($stuff2);
        echo "<\pre>\n";
    ?>
    </h1>
    <h1>
        <?php
            echo "<p>\n";
                //dumping array but cooler
                var_dump($stuff2);
            echo "</p>\n";
        ?>
    </h1>
    <h1>
        <?php
            $thing = FALSE;
            print_r("This is print_r => $thing");
            echo "<br>\n";
            var_dump($thing);
        ?>
    </h1>

    <h1>
        <?php
            // add last pos to array
            $va = array();
            $va[] = "hello";
            $va[] = "world";
            print_r($va);
        ?>
        <br>
        <?php
            //add key value pair dic
            $za = array();
            $za["name"] = "hello";
            $za["course"] = "world";
            print_r($za);
        ?>
    </h1>

    <h1>
        <?php
            //loop dic
            foreach( $stuff2 as $k => $v ){
                echo "Key= ",$k,"Val= ",$v,"\n";
            }
            echo "<br>\n";
            //loop array
            foreach( $stuff as $k => $v ){
                echo "Key= ",$k,"Val= ",$v,"\n";
            }
        ?>
    </h1>

    <h1>
        <?php
            // count loop throught array
            for ( $i = 0; $i < count($stuff); $i++) { 
                echo "I= ",$i,"Val= ",$stuff[$i],"\n";
                echo "<br>\n";
            }
        ?>
    </h1>

    <h1>
        <?php
            $products = array(
                'paper' => array(
                    'photo' => "Photo"
                ),
                'pens' => array (
                    'ball'=> "ball"
                ),
                'misc' => array (
                    'tape' => "Sticky Tape"
                )
                
            );
            echo $products["pens"]["ball"];
        ?>
    </h1>
    
</body>
</html>