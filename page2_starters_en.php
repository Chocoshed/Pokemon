<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data1_starters_en.php');
include('include/data_commun_en.php');
// Lancement du moteur Twig :

echo $twig->render('modele2_starters.twig', [
	'gen' => $gen,
    'starters' => $starters,
    'asideActu' => $asideActu,
    'header' => $header,
    'aside' => $aside,
    'footer' => $footer
]);

