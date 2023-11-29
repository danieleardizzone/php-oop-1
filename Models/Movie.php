<?php

include_once __DIR__ . '/Production.php';

class Movie extends Production{
    public $profit;
    public $duration;

    function __construct($_title, $_language, $_rating, $_profit, $_duration) {
        
        parent::__construct($_title, $_language, $_rating);
        $this->setProfit($_profit);
        $this->setDuration($_duration);
    }

    public function setProfit($profit) {
        if(is_numeric($profit) && $profit >= 0) {
            $this->profit = intval($profit) . ' $';
        } else {
            $this->profit = 0;
            var_dump('il parametro $profit non e corretto');
        }
    }

    public function setDuration($duration) {
        if(is_numeric($duration) && $duration >= 0) {
            $this->duration = intval($duration) . ' mins';
        } else {
            $this->duration = 0;
            var_dump('il parametro $duration non e corretto');
        }
    }
}