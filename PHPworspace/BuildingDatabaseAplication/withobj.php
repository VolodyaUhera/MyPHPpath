<?php

Class Person {

    static int $bob = 5;
    public $fullname = false;
    public $givenname = false;
    public $familyname = false;
    public $room = false;

        function  get_name() {
            if ( $this->fullname !== false) return $this -> fullname;
            if ( $this->familyname !== false && $this->givenname !== false) {
                return $this->givenname . ' ' . $this->familyname;
            }
            return false;
        }
}

$chuck = new person();
$chuck->fullname = "Chuck Severance";
$chuck->room = '4429NQ';

$colleen = new person();
$colleen->familyname = 'Van Lent';
$colleen->givenname = 'Colleen';
$colleen->room = '3439NQ';
echo '<pre>';
print $colleen->get_name() . "\n";
print $chuck->get_name() . "\n";
echo $chuck::$bob;
echo '</pre>';
?>

<h1>
    My name is <?= 'My name is ' . $chuck::$bob ?>
</h1>
