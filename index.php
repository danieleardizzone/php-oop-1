<?php

class Production {
    public $title;
    public $language;
    public $rating;

    function __constructor($_title, $_language, $_rating) {
        $this->title = $_title;
        $this->language = $_language;
        $this->ratig = $_rating;
    }
}

$hp = new Production('Harry Potter', 'en', '4');

$rambo = new Production('Rambo', 'en', '3');

$matrix = new Production('Matrix', 'en', '4');

$belluscone = new Production('Belluscone', 'it', '3');

$productions = [$hp, $rambo, $matrix, $belluscone];

var_dump($productions);