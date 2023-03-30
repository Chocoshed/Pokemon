<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data1_starters.php');
include('include/data_commun.php');

// Lancement du moteur Twig :

echo $twig->render('modele2_starters.twig', [
	'gen' => $gen,
    'starters' => $starters,
    'asideActu' => $asideActu,
    'header' => $header,
    'aside' => $aside,
    'footer' => $footer
]);

