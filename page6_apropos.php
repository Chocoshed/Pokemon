<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data_commun.php');
include('include/data5_apropos.php');

// Lancement du moteur Twig :

echo $twig->render('modele6_apropos.twig', [
    'asideActu' => $asideActu,
    'aside' => $aside,
    'header' => $header,
    'main' => $main,
    'footer' => $footer,
    'footer' => $footer
]);
