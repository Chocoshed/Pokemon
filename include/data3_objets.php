<?php

$aside = [
    'titre' => 'Regions',
    'lien' => [
        ['href' => '#balls', 'nom' =>'Poké Balls'],
        ['href' => '#medicaments', 'nom' =>'Médicaments'],
        ['href' => '#ct', 'nom' =>'CT'],
        ['href' => '#cs', 'nom' =>'CS'],
        ['href' => '#rares', 'nom' =>'Objets Rares']
        ]
];

$objetsInfo = [
    'h2' => 'Les Objets',
    'titre' => 'Objets'
];

$objets = [
    [
        'id' => 'balls',
        'h3' => 'Les Poké Balls',
        'objet' => [
            'objet1' => [
                'img' => 'images/objets/balls_poke_ball.png',
                'alt' => 'pokéball',
                'legende' => 'Poké Ball',
                'h4' => 'Poké Ball',
                'description' => 'La <strong>Poké Ball</strong> est une variété de Ball présente dans toutes les générations de jeux Pokémon
                depuis <strong>Pokémon Rouge et Vert</strong>. C\'est le plus basique des outils de capture de Pokémon. </p>
            <p>Étant la Ball la plus classique, elle n\'a pas d\'effet particulier. Ainsi, son <strong>Bonus Ball</strong> est
                toujours de 1.'
            ],
            'objet2' => [
                'img' => 'images/objets/balls_super_ball.png',
                'alt' => 'superball',
                'legende' => 'Super Ball',
                'h4' => 'Super Ball',
                'description' => 'La <strong>Super Ball</strong> est une Ball apparue dans <strong>Pokémon Rouge et Vert</strong>. C\'est une version améliorée de la Poké Ball. </p>
                <p>Tout comme la Poké Ball, la Super Ball n\'a pas d\'effet secondaire. Elle a cependant un Bonus Ball supérieure à celle-ci, le Bonus Ball de la Poké Ball étant de 1.'
            ],
            'objet3' => [
                'img' => 'images/objets/balls_hyper_ball.png',
                'alt' => 'hyperball',
                'legende' => 'Hyper Ball',
                'h4' => 'Hyper Ball',
                'description' => 'La <strong>Hyper Ball</strong> est une Ball apparue dans <strong>Pokémon Rouge et Vert</strong>. C\'est une version améliorée de la Super Ball.</p>
                <p>Tout comme la Poké Ball et la <strong>Super Ball</strong>, la Hyper Ball n\'a pas d\'effet secondaire. Elle a cependant un Bonus Ball supérieur aux deux autres (celui de la Poké Ball étant de 1, et celui de la Super Ball de 1,5).'
            ],
            'objet4' => [
                'img' => 'images/objets/balls_master_ball.png',
                'alt' => 'masterball',
                'legende' => 'Master Ball',
                'h4' => 'Master Ball',
                'description' => 'La <strong>Master Ball</strong> est une Ball apparue dans Pokémon Rouge et Vert et développée par la Sylphe SARL. C\'est la Ball « ultime », elle ne peut pas rater.</p>
                <p>La <strong>Master Ball</strong> est considérée comme la meilleure Ball : en effet, dû à son Bonus Ball de 255, elle peut capturer n\'importe quel Pokémon sauvage à coup sûr.'
            ],
        ]
    ],
    [
        'id' => 'medicaments',
        'h3' => 'Les Médicaments',
        'objet' => [
            'objet1' => [
                'img' => 'images/objets/medicament_potion.jpg',
                'alt' => 'image de la potion',
                'legende' => 'Potion',
                'h4' => 'Potion',
                'description' => 'Cet objet permet de rendre jusqu\'à 20 PV ou jusqu\'à 60 PV à un Pokémon. On peut l\'utiliser en combat ou bien en dehors. Dans Légendes Pokémon : Arceus, elle permet aussi de confectionner une Super Potion. (Et oui c\'est bien une bouteille de spray)'
            ],
            'objet2' => [
                'img' => 'images/objets/medicament_antidote.png',
                'alt' => 'image de l\'antidote',
                'legende' => 'Antidote',
                'h4' => 'Antidote',
                'description' => 'Cet objet permet de soigner un Pokémon de l\'empoisonnement (ou de l\'empoisonnement grave) lorsqu\'il est utilisé sur un Pokémon (en combat ou bien en dehors). '
            ],
            'objet3' => [
                'img' => 'images/objets/medicament_plume_armure.png',
                'alt' => 'image de la plume armure',
                'legende' => 'Plume Armure',
                'h4' => 'Plume Armure',
                'description' => 'La Plume Armure (Aile Armure avant Pokémon Épée et Bouclier) est un objet apparu dans la cinquième génération. Elle augmente d\'un EV la statistique de défense. '
            ],
            'objet4' => [
                'img' => 'images/objets/medicament_rappel.png',
                'alt' => 'image du rappel',
                'legende' => 'Rappel',
                'h4' => 'Rappel',
                'description' => 'Lorsqu\'il est utilisé sur un Pokémon K.O. (en combat ou bien en dehors), cet objet le réanime et lui redonne la moitié de ses PV max. Cette somme est arrondie à l\'unité inférieure en cas de nombre impair, sauf pour Munja qui récupère son unique PV. '
            ],
        ]
    ],
    [
        'id' => 'ct',
        'h3' => 'Les CT',
        'objet' => [
            'objet1' => [
                'video' => 'https://www.pokepedia.fr/images/8/88/D%C3%A9flagration_USUL_animation.mp4',
                'alt' => 'video de la ct déflagration',
                'h4' => 'Déflagration',
                'description' => 'Déflagration inflige des dégâts et a 10% de chances de brûler la cible. Son animation est basée sur le premier des cinq caractères japonais géants allumés pendant la fête du Gozan no Okuribi. Il s\'agit en l\'occurrence de 大 (dai), qui signifie « grand ».'
            ],
            'objet2' => [
                'video' => 'https://www.pokepedia.fr/images/9/99/Bulles_d%27O_USUL_animation.mp4',
                'alt' => 'video de la ct bulles d\'o',
                'h4' => 'Bulles d\'O',
                'description' => 'L\'utilisateur envoie des bulles infligeant des dégâts et ayant 10% de chances baisser la Vitesse de la cible d\'un niveau.'
            ],
            'objet3' => [
                'video' => '//www.pokepedia.fr/images/0/0f/Laser_Glace_USUL_animation.mp4',
                'alt' => 'video de la ct laser glace',
                'h4' => 'Laser Glace',
                'description' => 'D\'une puissance de 90, d\'une précision de 100% et possédant 10 PP, Laser Glace a aussi 10 % de chances de geler l\'ennemi. '
            ],
            'objet4' => [
                'video' => 'https://www.pokepedia.fr/images/c/ca/Tonnerre_LGPE_animation.mp4',
                'alt' => 'video de la ct tonerre',
                'h4' => 'Tonerre',
                'description' => 'Tonnerre a 10 % de chances de paralyser l\'adversaire, sauf s\'il est cloné ou déjà affecté par une modification de statut.
                Cette capacité est contenue dans la CT24. '
            ],
        ]
    ],
    [
        'id' => 'cs',
        'h3' => 'Les CS',
        'objet' => [
            'objet1' => [
                'img' => 'images/objets/cs_coupe.png',
                'alt' => 'image de l\'utilisation de coupe',
                'legende' => 'Ludwig coupant un arbre',
                'h4' => 'Coupe',
                'description' => 'Coupe peut ôter des petits arbres barrant la route. Dans certains jeux, Coupe peut couper une certaine zone de hautes herbes une fois à l\'intérieur.'
            ],
            'objet2' => [
                'img' => 'images/objets/cs_vol.png',
                'alt' => 'image de l\'utilisation de vol',
                'legende' => 'Utilisation de vol',
                'h4' => 'Vol',
                'description' => 'Vol permet au joueur de voyager vers certains endroits auparavant visités, le plus souvent des villes ou la Ligue Pokémon, atterrissant en général devant un Centre Pokémon, des PP ne sont pas décomptés de cette action et elle peut être réalisée même si le lanceur est K.O.'
            ],
            'objet3' => [
                'img' => 'images/objets/cs_surf.png',
                'alt' => 'image de l\'utilisation de surf',
                'legende' => 'Luth sur le dos d\'un pokemon',
                'h4' => 'Surf',
                'description' => 'Surf permet au voyageur de voyager dans l\'eau sur le dos d\'un Pokémon. Et permet donc d\'atteindre des endroits inateignables à pieds.'
            ],
            'objet4' => [
                'img' => 'images/objets/cs_cascade.jpg',
                'alt' => 'image de l\'utilisation de cascade',
                'legende' => 'Brice monte une cascade',
                'h4' => 'Cascade',
                'description' => 'Cascade permet de franchir les chutes d\'eau.'
            ],
        ]
    ],
    [
        'id' => 'rares',
        'h3' => 'Les Objets Rares',
        'objet' => [
            'objet1' => [
                'img' => 'images/objets/rare_velo_cross.png',
                'alt' => 'image du vélo cross',
                'legende' => 'Artwork du Vélo Cross',
                'h4' => 'La Bicyclette',
                'description' => 'La Bicyclette est un objet apparu lors de la première génération, et généralement offert au joueur après obtention du deuxième ou troisième Badge de la Ligue régionale. Cet objet permet de se déplacer plus rapidement et à différentes vitesses. Pour la plupart des jeux, c\'est simplement un outil pour la vitesse, mais à Hoenn, les vélos sont plus utiles. '
            ],
            'objet2' => [
                'img' => 'images/objets/rare_explorakit.png',
                'alt' => 'image de l\'explorakit',
                'legende' => 'Artwork de l\'Explorakit',
                'h4' => 'L\'Explorakit',
                'description' => 'L\'Explorakit est un objet rare apparu dans la quatrième génération avec Pokémon Diamant, Perle et Platine. Cet objet permet au joueur de creuser et ainsi d\'accéder au souterrain de Sinnoh. Il est possible d\'y jouer en multijoueur. '
            ],
            'objet3' => [
                'img' => 'images/objets/rare_mega_anneau.png',
                'alt' => 'image du méga anneau',
                'legende' => 'Le Méga-Anneau que porte Kalem',
                'h4' => 'Le Méga-Anneau',
                'description' => 'Le Méga-Anneau est un objet rare apparu dans la sixième génération avec les jeux Pokémon X et Y. Il permet de faire méga-évoluer les Pokémon tenant leur Méga-Gemme. Cependant, afin de pouvoir fonctionner, l\'objet doit porter une Gemme Sésame, qui permet d\'entrer en résonance avec les Méga-Gemmes, tenues par les Pokémon.'
            ],
            'objet4' => [
                'img' => 'images/objets/rare_pokematos.png',
                'alt' => 'image du pokematos',
                'legende' => 'Artwork du Pokématos',
                'h4' => 'Le Pokématos',
                'description' => 'Le Pokématos apparaît dans Pokemon Or et Argent et est un objet intégrant quatre fonctions importantes pour les Dresseurs : l\'heure, la carte, le téléphone et la radio. C\'est l\'équivalent du PokéNav de la troisième génération, de la Pokémontre de la quatrième génération ainsi que du C-Gear de la cinquième génération.'
            ],
        ]
    ]
];
