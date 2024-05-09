<?php
session_start();

if (isset($_POST['reset'])) {
    $_SESSION['chats'] = array();
    header('Location: index.php');
    return;
} elseif (isset($_POST['message'])) {
    if (empty($_SESSION['chats'])) {
        $_SESSION['chats'] = array();
    }
    $_SESSION['chats'][] = array($_POST['message'], date(DATE_RFC822));
    header('Location: index.php');
    return;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Chat</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h1>Chat</h1>
<form method="post" action="index.php">
    <p>
        <input type="text" name="message" size="60">
        <input type="submit" value="chat">
        <input type="submit" name="reset" value="Reset">
    </p>
</form>
<div id="chatcontainer">
    <img id="spinner" src="https://placehold.co/25x25">
</div>

<script type="text/javascript">
    function updateMessage() {
        $.ajax({
            url: 'chatlist.php',
            cache: false,
            success: function (data) {
                $('#chatcontainer').empty();
                for (var i = 0; i < data.length; i++) {
                    entry = data[i];
                    $('#chatcontainer').append("<p>"+entry[0] + "<br>&nbsp;&nbsp;" + entry[1]+ "</p>\n");
                }
                setTimeout(updateMessage, 4000);
            }
        });
    }

    updateMessage();
</script>
</body>
</html>
