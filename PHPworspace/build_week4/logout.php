<?php
    session_start();
    session_destroy();
    header("Location: alarmtest.php");
    return;
?>