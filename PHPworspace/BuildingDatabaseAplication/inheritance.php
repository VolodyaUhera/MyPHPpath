<?php

class Hello {
    protected $lang;
    function __construct($lang) {
        $this->lang = $lang;
    }
    function greet() {}
}

class Social extends Hello {
    function bye() {
        if ( $this->lang == 'fr' ) return 'Au revoir';
        if ( $this->lang == 'es') return  'Adios';
        return 'goddbye';
    }
}

$hi = new Social('es');
echo '<pre>';

    echo $hi->greet() . "\n";
    echo $hi->bye() . "\n";

echo '</pre>';
?>