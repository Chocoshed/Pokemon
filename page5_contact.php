<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data_commun.php');
include('include/data4_contact.php');

// Lancement du moteur Twig :

echo $twig->render('modele5_contact.twig', [
    'asideActu' => $asideActu,
    'header' => $header,
    'aside' => $aside,
    'main' => $main,
    'footer' => $footer
]);
