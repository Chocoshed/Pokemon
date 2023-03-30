<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data2_regions_en.php');
include('include/data_commun_en.php');

// Lancement du moteur Twig :

echo $twig->render('modele3_regions.twig', [
    'titre' => 'Régions',
	'region' => $region,
    'regionInfo' => $regionInfo,
    'asideActu' => $asideActu,
    'header' => $header,
    'aside' => $aside,
    'footer' => $footer
]);
