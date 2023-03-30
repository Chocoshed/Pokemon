<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data3_objets_en.php');
include('include/data_commun_en.php');

// Lancement du moteur Twig :
// $twig->render($modele-de-page, $tableau-de-variables)

echo $twig->render('modele4_objets.twig', [
	'objets' => $objets,
    'objetsInfo' => $objetsInfo,
    'asideActu' => $asideActu,
    'header' => $header,
    'aside' => $aside,
    'footer' => $footer
]);
