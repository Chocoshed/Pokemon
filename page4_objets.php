<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data3_objets.php');
include('include/data_commun.php');

// Lancement du moteur Twig :

echo $twig->render('modele4_objets.twig', [
	'objets' => $objets,
    'objetsInfo' => $objetsInfo,
    'asideActu' => $asideActu,
    'header' => $header,
    'aside' => $aside,
    'footer' => $footer
]);
