<?php

$aside = [
    'titre' => 'Regions',
    'lien' => [
        ['href' => '#balls', 'nom' =>'Poké Balls'],
        ['href' => '#medicaments', 'nom' =>'Medicines'],
        ['href' => '#ct', 'nom' =>'TM'],
        ['href' => '#cs', 'nom' =>'HM'],
        ['href' => '#rares', 'nom' =>'Key Items']
        ]
];

$objetsInfo = [
    'h2' => 'Items',
    'titre' => 'Items'
];

$objets = [
    [
        'id' => 'balls',
        'h3' => 'Poké Balls',
        'objet' => [
            'objet1' => [
                'img' => 'images/objets/balls_poke_ball.png',
                'alt' => 'pokéball',
                'legende' => 'Poké Ball',
                'h4' => 'Poké Ball',
                'description' => 'The <strong> Poké Ball </strong> is a variety of balls present in all generations of Pokémon games
                Since <strong> Red and Green Pokémon </strong>.It is the most basic of Pokémon capture tools.</p>
            <p> being the most classic ball, it has no particular effect.Thus, his <strong> Bonus Ball </strong> is
                Always 1.'
            ],
            'objet2' => [
                'img' => 'images/objets/balls_super_ball.png',
                'alt' => 'great ball',
                'legende' => 'Great Ball',
                'h4' => 'Great Ball',
                'description' => 'The <strong> Great Ball </strong> is a ball that appeared in <strong> Red and Green Pokémon </strong>.It is an improved version of the Poké Ball.</p>
                <p> Like the Poké Ball, the Super Ball has no side effect.However, it has a bonus ball greater than it, the Poké Ball bonus ball being 1.'
            ],
            'objet3' => [
                'img' => 'images/objets/balls_hyper_ball.png',
                'alt' => 'ultra ball',
                'legende' => 'Ultra Ball',
                'h4' => 'Ultra Ball',
                'description' => 'The <strong> Ultra Ball </strong> is a ball that appeared in <strong> Red and Green Pokémon </strong>.It is an improved version of the Great Ball. </p>
                <p> Just like the Poké Ball and the <strong> Super Ball </strong>, the Hyper Ball has no side effect.However, it has a bonus ball superior to the other two (that of the Poké Ball being 1, and that of the 1.5 Super Ball).'
            ],
            'objet4' => [
                'img' => 'images/objets/balls_master_ball.png',
                'alt' => 'masterball',
                'legende' => 'Master Ball',
                'h4' => 'Master Ball',
                'description' => 'The <strong> Master Ball </strong> is a ball that appeared in Red and Green Pokémon and developed by the Sylphe SARL.It is the "ultimate" ball, it cannot miss. </p>
                <p> The <strong> Master Ball </strong> is considered the best ball: indeed, due to its 255 bonus ball, it can capture any wild Pokémon for sure.'
            ],
        ]
    ],
    [
        'id' => 'medicaments',
        'h3' => 'Medicines',
        'objet' => [
            'objet1' => [
                'img' => 'images/objets/medicament_potion.jpg',
                'alt' => 'image of Potion',
                'legende' => 'Potion',
                'h4' => 'Potion',
                'description' => 'This object makes it possible to give up to 20 PV or to 60 PV to a Pokémon.It can be used in combat or outside.In Pokémon Legends: Arceus, it also makes it possible to make a super potion.(And yes it is a bottle of spray)'
            ],
            'objet2' => [
                'img' => 'images/objets/medicament_antidote.png',
                'alt' => 'image of Antidote',
                'legende' => 'Antidote',
                'h4' => 'Antidote',
                'description' => 'This object makes it possible to treat a poisoning poisoning (or serious poisoning) when it is used on a Pokémon (in combat or outside). '
            ],
            'objet3' => [
                'img' => 'images/objets/medicament_plume_armure.png',
                'alt' => 'image of Resist Feather',
                'legende' => 'Resist Feather',
                'h4' => 'Resist Feather',
                'description' => 'The Resist Feather (front armor wing pokémon sword and shield) is an object that appeared in the fifth generation.It increases the defense statistics by an EV. '
            ],
            'objet4' => [
                'img' => 'images/objets/medicament_rappel.png',
                'alt' => 'image of max revive',
                'legende' => 'Max Revive',
                'h4' => 'Max Revive',
                'description' => 'When it is used on a K.O. Pokemon (in combat or outside), this object revives him and gives him half of his Max PV.This sum is rounded to the lower unit in the event of an odd number, except for Munja which recovers its only PV. '
            ],
        ]
    ],
    [
        'id' => 'ct',
        'h3' => 'TM',
        'objet' => [
            'objet1' => [
                'video' => 'https://www.pokepedia.fr/images/8/88/D%C3%A9flagration_USUL_animation.mp4',
                'alt' => 'video of TM fire blast',
                'h4' => 'Fire Blast',
                'description' => 'Fire Blast inflicts damage and has a 10% chance of burning the target.Its animation is based on the first of the five giant Japanese characters on during the Gozan No Okuribi party.It is in the occurrence of 大 (dai), which means "large".'
            ],
            'objet2' => [
                'video' => 'https://www.pokepedia.fr/images/9/99/Bulles_d%27O_USUL_animation.mp4',
                'alt' => 'video of TM bulles Bubble Beam',
                'h4' => 'Bubble Beam',
                'description' => 'The user sends bubbles inflicting damage and having 10% chance lower the speed of the target of a level.'
            ],
            'objet3' => [
                'video' => '//www.pokepedia.fr/images/0/0f/Laser_Glace_USUL_animation.mp4',
                'alt' => 'video of TM Ice Beam',
                'h4' => 'Ice Beam',
                'description' => 'A power of 90, a precision of 100 % and having 10 pp, laser ice is also 10 % chance of freezing the enemy. '
            ],
            'objet4' => [
                'video' => 'https://www.pokepedia.fr/images/c/ca/Tonnerre_LGPE_animation.mp4',
                'alt' => 'video of TM thunderbolt',
                'h4' => 'Thunderbolt',
                'description' => 'Thunder has 10 % chance of paralyzing the opponent, except for it is cloned or already affected by a change in status.
                This capacity is contained in the CT24. '
            ],
        ]
    ],
    [
        'id' => 'cs',
        'h3' => 'HM',
        'objet' => [
            'objet1' => [
                'img' => 'images/objets/cs_coupe.png',
                'alt' => 'image of cut',
                'legende' => 'Cutting a tree',
                'h4' => 'Cut',
                'description' => 'Cut can remove small trees blocking the road.In some games, cut can cut a certain area of high grass once inside.'
            ],
            'objet2' => [
                'img' => 'images/objets/cs_vol.png',
                'alt' => 'image of fly',
                'legende' => 'Flight use',
                'h4' => 'Fly',
                'description' => 'Fly allows the player to travel to certain places previously visited, most often cities or the Pokémon League, generally landing in front of a Pokémon center, PPs are not counted from this action and it can be carried out even if the launcher is K.O.'
            ],
            'objet3' => [
                'img' => 'images/objets/cs_surf.png',
                'alt' => 'image of the use of surf',
                'legende' => 'Luth on the back of a Pokemon',
                'h4' => 'Surf',
                'description' => 'Surf allows the traveler to travel in the water on the back of a Pokémon.And therefore allows you to reach unattainable places on foot.'
            ],
            'objet4' => [
                'img' => 'images/objets/cs_cascade.jpg',
                'alt' => 'image of the use of waterfall',
                'legende' => 'Brice climb a waterfall',
                'h4' => 'Waterfall',
                'description' => 'Waterfalls allows you to cross waterfalls.'
            ],
        ]
    ],
    [
        'id' => 'rares',
        'h3' => 'Key Items',
        'objet' => [
            'objet1' => [
                'img' => 'images/objets/rare_velo_cross.png',
                'alt' => 'image of Cross bike',
                'legende' => 'Artwork du Vélo Cross',
                'h4' => 'The bicycle',
                'description' => 'The bicycle is an object that appeared during the first generation, and generally offered to the player after obtaining the second or third badge from the regional league.This object allows you to move more quickly and at different speeds.For most games, it is simply a tool for speed, but in Hoenn, bikes are more useful. '
            ],
            'objet2' => [
                'img' => 'images/objets/rare_explorakit.png',
                'alt' => 'image of the explorakit',
                'legende' => 'Artwork de the Explorakit',
                'h4' => 'Explorakit',
                'description' => 'Explorakit is a rare object that appeared in the fourth generation with Pokémon Diamond, Pearl and Platinum.This object allows the player to dig and thus access Sinnoh underground.It is possible to play in multiplayer.'
            ],
            'objet3' => [
                'img' => 'images/objets/rare_mega_anneau.png',
                'alt' => 'image of mega ring',
                'legende' => 'The mega-ring that Kalem carries',
                'h4' => 'Mega-Ring',
                'description' => 'The Mega-Ring is a rare object that appeared in the sixth generation with the Pokémon X and Y games. It allows mega-evolving the Pokémon holding their mega-gem.However, in order to be able to operate, the object must carry a sesame gem, which allows us to resonate with the mega-gems, run by the Pokémon.'
            ],
            'objet4' => [
                'img' => 'images/objets/rare_pokematos.png',
                'alt' => 'image of pokegear',
                'legende' => 'Artwork of Pokégear',
                'h4' => 'Pokégear',
                'description' => 'Pokégear appears in Pokemon Gold and Silver and is an object incorporating four important functions for trainers: time, card, telephone and radio.This is the equivalent of the third generation Pokenav, the fourth generation pokémontre as well as the C-Gear of the fifth generation.'
            ],
        ]
    ]
];
