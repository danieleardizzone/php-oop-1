<?php

include_once __DIR__ . '/Production.php';

class Serie extends Production{
    public $season;

    function __construct($_title, $_language, $_rating, $_season) {

        parent::__construct($_title, $_language, $_rating);
        $this->season = $_season;
    }
}