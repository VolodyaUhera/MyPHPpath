<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change DOM</title>
</head>
<body>

<a href="#" onclick="document.getElementById('stuff').innerHTML ='BOB'; return false;">Back</a>
<a href="#" onclick="document.getElementById('stuff').innerHTML ='TOMA'; return false;">Toma</a>

<br><span>This is <span id="stuff"></span> </span>

</body>
</html>