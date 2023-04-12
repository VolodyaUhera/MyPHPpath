<?php
//date_date_set('America/New_York');

$nextWeek = time() + (7 * 24 * 60 * 60);

echo 'Now ' . date('Y-m-d') . "\n";
echo  '<br>';
echo 'Next week ' . date('Y-m-d', $nextWeek) . "\n";

echo '<br>' . "=====\n" . '<br>';

$now = new DateTime(); //object now of class DataTime
$nextWeek = new DateTime('today +1 week'); //

echo 'Now ' . $now->format('Y-m-d') . "\n"; //format is method
echo  '<br>';
echo 'Next week ' . $nextWeek->format('Y-m-d') . "\n"; // -> is call method
echo '<br>';

print_r ($_POST);
echo '<br>';
print_r($_GET);
?>
