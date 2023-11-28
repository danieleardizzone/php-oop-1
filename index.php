<?php

class Production {
    public $title;
    public $language;
    public $rating;

    function __construct($_title, $_language, $_rating) {
        $this->title = $_title;
        $this->language = $_language;
        $this->rating = $_rating;
    }
}

$hp = new Production('Harry Potter', 'en', '4');

$rambo = new Production('Rambo', 'en', '3');

$matrix = new Production('Matrix', 'en', '4');

$belluscone = new Production('Belluscone', 'it', '3');

$productions = [$hp, $rambo, $matrix, $belluscone];

// var_dump($productions);

foreach($productions as $production){
?>
<h3><?= $production->title ?></h3>
<p>language: <?= $production->language ?></p>
<p>rating: <?= $production->rating ?>/5</p>
<?php  
}
?>