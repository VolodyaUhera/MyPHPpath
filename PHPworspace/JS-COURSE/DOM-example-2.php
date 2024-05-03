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

<p>
    <a href="#" onclick="add(); return false;">More </a>
</p>

<ul id="the-list">
    <li>First item</li>
</ul>

<script>
    counter = 1;
    console.log(document.getElementById('the-list'))
    function add() {
        var x = document.createElement('li');
        x.className = "list-item";
        x.innerHTML = 'The counting  is ' + counter;
        document.getElementById('the-list').appendChild(x);
        counter++;
        x = 27 % 2;
        console.log(x);
        14 10 5
    }
</script>
</body>
</html>