<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jQueru</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

<script type="text/javascript">
    $(document).ready(function() {
        alert("hello jQuery World");
        window.console && console.log('Hello jQuery..');
    });
</script>

<script type="text/javascript">
    $(window).resize(function (){
        console.log('width '+$(window).width()+' height='+$(window).height());
    });
</script>

<p>Here some content</p>
</body>
</html>