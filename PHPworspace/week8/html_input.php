<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INput</title>

</head>
<body>
    <?php
    $data = array(
        '_ijt'=>$_GET['_ijt'],
        '_ij_reload'=>'RELOAD_ON_SAVE'
    );

    $queryString = http_build_query($data);

    echo 'localhost/'.$queryString;


    ?>
    <h1>Many fields type</h1>
    
    <form method="post" action="html_input.php">
        <p>
            <label for="inp01">Account:</label>
            <input type="text" name="accaunt" id="inp01" size="40">
        </p>
        <p>
            <label for="inp02">Passord</label>
            <input type="password" name="pw" id="inp02">
        </p>
        <p>
            <label for="inp03">Nick name</label>
            <input type="text" name="nick" id="inp03">
        </p>

        <input type="submit">
    
    
    <h1>Prefered Time:</h1>

    <form method="post">
        <input type="radio" name="when" value="am">AM<br>
        <input type="radio" name="when" value="am">AM<br>
        <input type="radio" name="when" value="pm">PM<br>
        <input type="radio" name="when" value="pm">PM<br>
        <input type="submit">
    </form>

    <h1>Class taken</h1>

    <form method="post">
        <p>
        <input type="checkbox" name="class1" value="si502" checked>
            SI502 - Networked Tech <br>
        <input type="checkbox" name="class2" value="si539" >
            SI539 - App Engine <br>
        <input type="checkbox" name="class3" value="si543" >
            SI543 - JavaEngine <br>
        </p>
    </form>

    <form method="post">
        <p>
            <label for="inp06">which soda:</label>
            <select name="soda" id="inp06">
                <option value="0">-- Please Select --</option>
                <option value="1">Coke</option>
                <option value="2">Pepsi</option>
                <option value="3">Mountain Dew</option>
                <option value="4">Orange juice</option>
                <option value="5">Lemonade</option>
            </select>
        </p>
    </form>

    <p>
        <label for="inp08">Tell us about yourself:</label> <br>
        <textarea name="about" id="inp08" cols="30" rows="10">

        </textarea>
    </p>

    <p>
        
        <label for="inp09">Which are awesome?</label> <br>
        <select multiple="multiple" name="code[]" id="inp09" >
            <option value="python">Python</option>
            <option value="css">Css</option>
            <option value="html">Html</option>
            <option value="php">php</option>
        </select>
        
    </p>

    <p>
        <input type="submit" name="dopost" value="Submit"><br>
        <input type="button" onclick="location.href='http://www.google.com'; return false;" value="Escape">
        <!-- a ancor look like a button     -->
    </p>

    <label for="inp10">Select your color:</label> <br>

        <input type="color" name="favcolor" value="#0000ff" id="inp10"> <br>
        <input type="date" name="bday"> <br>
        <input type="email" name="email" > <br>
        <input type="number" name="number" min="1" max="5"> <br>
        <input type="url" name="homepage"> <br>
        <input type="flying" name="saucer"> <br>


    </form>
    

    <br>
    <pre>
    <?php
        print_r ($_GET);
        echo "<br>\n";
        print_r ($_POST);
    ?>
    </pre>
</body>
</html>