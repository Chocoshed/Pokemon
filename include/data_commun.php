<?php



$header = [
    ['href' => 'page1_accueil.php', 'nom' => 'Accueil'],
    ['href' => 'page2_starters.php', 'nom' => 'Les Starters'],
    ['href' => 'page3_regions.php', 'nom' => 'Les Régions'],
    ['href' => 'page4_objets.php', 'nom' => 'Les Objets'],
    ['href' => 'page5_contact.php', 'nom' => 'Contact'],
    ['href' => 'page6_apropos.php', 'nom' => 'A Propos'],
];

$asideActu = [
    'h5' => 'Actualités',
    'p' => 'Dernière sortie : Pokemon Ecarlate et Violet',
    'img' => 'images/violet.jpg',
    'alt' => 'image jaquette du jeu pokemon violet',
    'top' => 'Revenir en haut'
];

$footer = [
    ['title' => 'Accueil', 'url' => 'page1_accueil.php'],
    [
        'title' => 'Les starters', 'url' => 'page2_starters.php',
        'submenu' => [
            ['title' => 'Gen. IV', 'url' => 'page2_starters.php#gen4'],
            ['title' => 'Gen. V','url' => 'page2_starters.php#gen5'],
            ['title' => 'Gen. VI','url' => 'page2_starters.php#gen6'],
            ['title' => 'Gen. VII','url' => 'page2_starters.php#gen7'],
            ['title' => 'Gen. VIII','url' => 'page2_starters.php#gen8']
        ]
    ],
    [
        'title' => 'Les régions','url' => 'page3_regions.php',
        'submenu' => [
            ['title' => 'Sinnoh','url' => 'page3_regions.php#sinnoh'],
            ['title' => 'Unys','url' => 'page3_regions.php#unys'],
            ['title' => 'Kalos','url' => 'page3_regions.php#kalos'],
            ['title' => 'Galar','url' => 'page3_regions.php#galar'],
            ['title' => 'Paldea','url' => 'page3_regions.php#paldea']
        ]
    ],
    [
        'title' => 'Les objets', 'url' => 'page4_objets.php#balls',
        'submenu' => [
            ['title' => 'Les Poké Balls','url' => 'page4_objets.php#balls'],
            ['title' => 'Médicaments', 'url' => 'page4_objets.php#medicaments'],
            ['title' => 'CT','url' => 'page4_objets.php#ct'],
            ['title' => 'CS','url' => 'page4_objets.php#cs'],
            ['title' => 'Objets Rares', 'url' => 'page4_objets.php#rares']
        ]
    ],
    ['title' => 'Contact', 'url' => 'page5_contact.php'],
    ['title' => 'A Propos', 'url' => 'page6_apropos.php']
];
