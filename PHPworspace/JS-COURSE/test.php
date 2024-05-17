<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#addPos').click(function (event){
                event.preventDefault();
                alert("buzz");
                return false;
            });
        });
    </script>
</head>

<body>
<form method="post">
    <p>Position: <input type="submit" id="addPos" value="+"></p>
</form>
</body>
