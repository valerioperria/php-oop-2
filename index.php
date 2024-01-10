<?php
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Cucce.php';
require_once __DIR__ . '/Models/Giochi.php';
require_once __DIR__ . '/Models/Igene.php';
require_once __DIR__ . '/Models/Sconto.php';

$croccantini = new Cibo('Cani', 'Croccantini', 22, 'Vegetale');

$piccola_casetta = new Cuccia('Cani', 'Piccola Casetta', 43, 'Legno');

$topolino_denti = new Igene('Gatti', 'Topolino Spazzolino',  7, 'Bocca');

$albero = new Giocattolo('Gatti', 'Albero da Arrampicata', 38, 'Legno e Paglia');

// var_dump($croccantini, $croccantini->print_info());

echo $croccantini->print_info();
echo '<p>';
// prezzo con sconto
echo $croccantini->calcola_sconto();


echo '<p>';
echo $piccola_casetta->print_info();
echo '<p>';
// prezzo con sconto
echo $piccola_casetta->calcola_sconto();


echo '<p>';
echo $topolino_denti->print_info();
echo '<p>';
// prezzo con sconto
echo $topolino_denti->calcola_sconto();


echo '<p>';
echo $albero->print_info();
echo '<p>';
// prezzo con sconto
echo $albero->calcola_sconto();