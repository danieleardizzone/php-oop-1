<?php

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Serie.php';

$million = pow(10, 6);
$thousand = pow(10, 3);

$hp = new Movie('Harry Potter e la camera dei segreti', 'en', '4', 879 * $million, 161);

$rambo = new Movie('Rambo', 'en', '3', 125 * $million, 193);

$matrix = new Movie('Matrix', 'en', '4', 157 * $million, 136);

$belluscone = new Movie('Belluscone - Una storia siciliana', 'it', '3', 163 * $thousand, 95);

$shrek = new Movie('Shrek', 'en', '5', 484.4 * $million, 90);


$aot = new Serie("L'attacco dei giganti", 'jp', '4', 4);

$br_ba = new Serie('Breaking Bad', 'en', '5', 5);

$sao = new Serie('Sword Art Online', 'jp', '4', 3);

$got = new Serie('Il Trono di Spade', 'en', '3', 8);

$shameless = new Serie('Shameless', 'en', '2', 11);


$productions = [$hp, $rambo, $matrix, $belluscone, $shrek, $aot, $br_ba, $sao, $got, $shameless];

// var_dump($productions);

/**foreach($productions as $production){
?>
<h3><?= $production->title ?></h3>
<p>language: <?= $production->language ?></p>
<p>rating: <?= $production->rating ?>/5</p>
<?php  
};
?> */

foreach($productions as $production){
    ?> <h3><?= $production->title ?></h3>
    <p>lingua: <?= $production->language ?></p>
    <p>voto: <?= $production->rating ?>/5</p>
    <?php if($production->profit) {?>
        <p>incassi: <?= $production->profit ?></p>
        <?php }; ?>
    <?php if($production->duration) {?>
        <p>durata: <?= $production->duration ?></p>
        <?php }; ?>
    <?php if($production->season) {?>
        <p>stagioni: <?= $production->season ?></p>
        <?php }; ?>
    <?php }; ?>