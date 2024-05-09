<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jQueruFORMS</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<form method="post" id="target" >
    <input name="one" type="text">
    <img id="spinner" src="https://placehold.co/25x25" style="display: none">
    <input type="submit">
</form>

<div id="result">asdasd</div>


<script type="text/javascript">

    $('#target').submit(function (event) {
        event.preventDefault(); // prevent form submission
        $('#spinner').show();
        var form = $('#target');
        var txt = form.find('input[name=one]').val();
        window.console && console.log('Sending POST');
        $.post('autoecho.php', {'val': txt},
            function (data) {
                window.console && console.log(data);
                $('#result').empty().append(data);
                $('#spinner').hide();
            }
        ).fail(function () {
            $('#target').css('background-color', 'red');
            alert('dang');
        });
    });

</script>

</body>
</html>
