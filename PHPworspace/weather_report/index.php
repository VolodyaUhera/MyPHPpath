<?php

require_once 'vendor/autoload.php'; // require the GeoIP2 PHP library

use GeoIp2\Database\Reader;

$ipAddress = $_SERVER['REMOTE_ADDR']; // get the user's IP address
$reader = new Reader('path/to/GeoLite2-City.mmdb'); // initialize the GeoIP2 reader
$record = $reader->city($ipAddress); // get the user's city location

echo $record->country->name . "\n"; // print the user's country name
echo $record->city->name . "\n"; // print the user's city name
echo $record->location->latitude . "\n"; // print the user's latitude
echo $record->location->longitude . "\n"; // print the user's longitude

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather report</title>
</head>
<body>
    <h1>Weather report</h1>
    <p>You city is </p>
</body>
</html>