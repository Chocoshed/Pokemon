<?php

$header = [
    ['href' => 'page1_accueil_en.php', 'nom' => 'Home'],
    ['href' => 'page2_starters_en.php', 'nom' => 'Starters'],
    ['href' => 'page3_regions_en.php', 'nom' => 'Regions'],
    ['href' => 'page4_objets_en.php', 'nom' => 'Items'],
    ['href' => 'page5_contact_en.php', 'nom' => 'Contact'],
    ['href' => 'page6_apropos_en.php', 'nom' => 'About Us'],
];

$asideActu = [
    'h5' => 'News',
    'p' => 'Last outing : Pokemon Scarlet & Violet',
    'img' => 'images/violet.jpg',
    'alt' => 'Pokemon purple jacket image',
    'top' => 'Back to top'
];


$footer = [
    ['title' => 'Home', 'url' => 'page1_accueil_en.php'],
    [
        'title' => 'Starters', 'url' => 'page2_starters_en.php',
        'submenu' => [
            ['title' => 'Gen. IV', 'url' => 'page2_starters_en.php#gen4'],
            ['title' => 'Gen. V','url' => 'page2_starters_en.php#gen5'],
            ['title' => 'Gen. VI','url' => 'page2_starters_en.php#gen6'],
            ['title' => 'Gen. VII','url' => 'page2_starters_en.php#gen7'],
            ['title' => 'Gen. VIII','url' => 'page2_starters_en.php#gen8']
        ]
    ],
    [
        'title' => 'Regions','url' => 'page3_regions_en.php',
        'submenu' => [
            ['title' => 'Sinnoh','url' => 'page3_regions_en.php#sinnoh'],
            ['title' => 'Unys','url' => 'page3_regions_en.php#unys'],
            ['title' => 'Kalos','url' => 'page3_regions_en.php#kalos'],
            ['title' => 'Galar','url' => 'page3_regions_en.php#galar'],
            ['title' => 'Paldea','url' => 'page3_regions_en.php#paldea']
        ]
    ],
    [
        'title' => 'Items', 'url' => 'page4_objets_en.php#balls',
        'submenu' => [
            ['title' => 'Poké Balls','url' => 'page4_objets_en.php#balls'],
            ['title' => 'Medicines', 'url' => 'page4_objets_en.php#medicaments'],
            ['title' => 'TM','url' => 'page4_objets_en.php#ct'],
            ['title' => 'HM','url' => 'page4_objets_en.php#cs'],
            ['title' => 'Key Items', 'url' => 'page4_objets_en.php#rares']
        ]
    ],
    ['title' => 'Contact', 'url' => 'page5_contact.php'],
    ['title' => 'About Us', 'url' => 'page6_apropos.php']
];