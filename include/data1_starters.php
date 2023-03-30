<?php

$aside = [
    'titre' => 'Starters',
    'lien' => [
        ['href' => '#g4', 'nom' =>'Gen. IV'],
        ['href' => '#g5', 'nom' =>'Gen. V'],
        ['href' => '#g6', 'nom' =>'Gen. VI'],
        ['href' => '#g7', 'nom' =>'Gen. VII'],
        ['href' => '#g8', 'nom' =>'Gen. IIX']
        ]
];

$starters = [
    'h2' => 'Les starters',
    'titre' => 'Starters'
];
// gen 4
$gen = [
    [
        'id' => 'g4',
        'h3' => 'Génération IV',
        'dataPos' => '1',
        'class' => 'gen4',
        'type' => [
            'eau' => [
                'h4' => 'Type Eau',
                'h5' => 'Tiplouf | n°393',
                'audio' => 'https://www.pokepedia.fr/images/b/be/Cri_4_d_393.ogg',
                'img' => 'images/starters/g4_tiplouf.png',
                'alt' => 'image de tiplouf',
                'version' => '<span>Version</span> : Perle & Diamant',
                'evolution' => '<span>Evolution</span> : Prinplouf, Pingoléon',
                'description' => '<strong>Tiplouf</strong> est un petit Pokémon bleu clair qui ressemble à un manchot (son appellation «         Pokémon         Pingouin » provient d\'une erreur de traduction de la version anglaise, « penguin » voulant dire manchot et non pingouin), avec un duvet de plumes épais pour l\'isoler contre le froid. Il a une tête bleu foncé avec un visage principalement blanc et un petit bec jaune. Les plumes du haut de sa tête s\'étendent tout le long de son dos jusqu\'à former sa queue, ainsi qu\'autour du cou, ce qui donne l\'impression qu\'il porte une cape. Il a deux tâches blanches et ovales sur son ventre ainsi qu\'un motif bleu clair entre ses deux yeux et au-dessus de son bec qui ressemble à une couronne. Il a des bras qui ressemblent à des nageoires et des pieds jaunes avec trois orteils chacun.</p>  <p><strong>Tiplouf</strong> a un grand sens de l\'orgueil personnel. À cause de cet orgueil, il a beaucoup de mal à accepter et à s\'habituer à la nourriture que les humains lui donnent, ainsi que pour créer des liens avec son Dresseur. Il gonfle son ventre pour éviter de se faire mal s\'il tombe, ce qui lui doit sa marche faible et maladroite. Cependant, il n\'en reste pas moins un excellent nageur, qui peut rester en apnée sous l\'eau près de dix minutes quand il s\'agit de chasser. Il est montré dans l\'animé qu\'il peut aussi voler sur de courtes distances. On peut l\'apercevoir sur les bords quand le climat devient plus froid.',
                'caracteristiques' => [
                    'titre' => 'Caractéristiques',
                    'contenu' => [
                        ['cle' => 'Taille', 'valeur' => '0.4 m'],
                        ['cle' => 'Poids', 'valeur' => '5.2 kg'],
                        ['cle' => 'Evolution', 'valeur' => 'Niveau 16'],
                        ['cle' => 'PV', 'valeur' => '53'],
                        ['cle' => 'Attaque', 'valeur' => '51'],
                        ['cle' => 'Defense', 'valeur' => '53'],
                        ['cle' => 'Atq. Spé', 'valeur' => '61'],
                        ['cle' => 'Déf. Spé', 'valeur' => '56'],
                        ['cle' => 'Vitesse', 'valeur' => '40']
                    ]
                ]
            ],
            'feu' => [
                'h4' => 'Type Feu',
                'h5' => 'Ouisticram | n°390',
                'audio' => 'https://www.pokepedia.fr/images/6/65/Cri_4_d_390.ogg',
                'img' => 'images/starters/g4_ouisticram.png',
                'alt' => 'image de ouisticram',
                'version' => '<span>Version</span> : Perle & Diamant',
                'evolution' => '<span>Evolution</span> : Chimpenfeu, Simiabraz',
                'description' => '<strong>Ouisticram</strong> est un petit Pokémon bipède qui ressemble à un jeune chimpanzé. Sa fourrure est principalement orange, à l \'exception de son visage, de ses oreilles, son ventre, ses mains et ses pieds, qui sont d \'une couleur beige proche du jaune. Il a sur l \'arrière-train une marque rouge, le plus souvent cachée par des flammes produites par du gaz incandescent se trouvant dans son estomac. Ces flammes s \'éteignent quand il dort, et sont faibles quand il est malade. Ses oreilles sont anormalement larges comparées à sa tête et sont rouges à l \'intérieur. Il a une petite dent pointue de chaque côté dans la mâchoire supérieure. Ouisticram a des marques rouges au-dessus des yeux, un symbole en forme de boucle sur le buste, cinq doigts à chaque main et trois orteils à chaque pied. Très agile, il est capable d \'escalader les pentes les plus escarpées des montagnes dans lesquelles il vit.</p>
            <p>Ouisticram est inspiré du chimpanzé, bien que la marque rouge sur son arrière-train rappelle l \'apparence d\'un babouin.',
                'caracteristiques' => [
                    'titre' => 'Caractéristiques',
                    'contenu' => [
                        ['cle' => 'Taille', 'valeur' => '0.5 m'],
                        ['cle' => 'Poids', 'valeur' => '6.2 kg'],
                        ['cle' => 'Evolution', 'valeur' => 'Niveau 14'],
                        ['cle' => 'PV', 'valeur' => '44'],
                        ['cle' => 'Attaque', 'valeur' => '58'],
                        ['cle' => 'Defense', 'valeur' => '44'],
                        ['cle' => 'Atq. Spé', 'valeur' => '58'],
                        ['cle' => 'Déf. Spé', 'valeur' => '44'],
                        ['cle' => 'Vitesse', 'valeur' => '61']
                    ]
                ]
            ],
            'plante' => [
                'h4' => 'Type Plante',
                'h5' => 'Tortipouss | n°387',
                'audio' => 'https://www.pokepedia.fr/images/a/a8/Cri_4_d_387.ogg',
                'img' => 'images/starters/g4_tortipouss.png',
                'alt' => 'image de tortipouss',
                'version' => '<span>Version</span> : Perle & Diamant',
                'evolution' => '<span>Evolution</span> : Boskara, Torterra',
                'description' => '<strong>Tortipouss</strong> est un petit Pokémon quadrupède principalement vert clair qui ressemble à une tortue et plus précisément à une tortue terrestre. Ses yeux, ses pieds et sa mâchoire inférieure sont jaunes. Son corps est recouvert d\'une petite carapace marron faite à partir de terre. Sa carapace est bordée par une bande noire et est traversée par une autre bande, noire également. Sur un Tortipouss en très bonne santé, sa carapace devrait être humide. Une jeune plante pousse sur le haut de sa tête, sur une petite partie de sa tête qui est marron. Le plant de sa tête s\'affaiblit au fur et à mesure que le Tortipouss commence à avoir soif. Comme c\'est un Pokémon de type Plante, Tortipouss se nourrit principalement grâce à la photosynthèse. Il boit aussi beaucoup d\'eau, surtout car sa carapace est créée à partir de terre. Dû à son statut de Pokémon de départ, un <strong>Tortipouss</strong> sauvage est extrêmement dur à trouver et il est généralement trouvé sous la possession d\'un Dresseur',
                'caracteristiques' => [  'titre' => 'Caractéristiques',
                    'contenu' => [
                    ['cle' => 'Taille', 'valeur' => '0.4 m'],
                    ['cle' => 'Poids', 'valeur' => '10.2 kg'],
                    ['cle' => 'Evolution', 'valeur' => 'Niveau 18'],
                    ['cle' => 'PV', 'valeur' => '55'],
                    ['cle' => 'Attaque', 'valeur' => '68'],
                    ['cle' => 'Defense', 'valeur' => '64'],
                    ['cle' => 'Atq. Spé', 'valeur' => '45'],
                    ['cle' => 'Déf. Spé', 'valeur' => '55'],
                    ['cle' => 'Vitesse', 'valeur' => '31']
                ]
                ]
            ]
        ]
    ],
    [
        'id' => 'g5',
        'h3' => 'Génération V',
        'dataPos' => '2',
        'class' => 'gen5',
        'type' => [
            'eau' => [
                'h4' => 'Type Eau',
                'h5' => 'Moustillon | n°',
                'audio' => 'https://www.pokepedia.fr/images/5/55/Cri_5_n_501.ogg',
                'img' => 'images/starters/g5_moustillon.png',
                'alt' => 'image de moustillon',
                'version' => '<span>Version</span> : Noir & Blanc',
                'evolution' => '<span>Evolution</span> : Marteloutre, Clamiral',
                'description' => 'Moustillon est un Pokémon marin bipède aux allures de loutre. Il a une tête sphérique et blanche avec des petites oreilles triangulaires bleu foncé. Il a des yeux foncés et un nez ovale brun. Des petites taches de rousseur sur ses joues annoncent des vibrisses. Il a deux petites dents sur la mâchoire supérieure. La fourrure bleu clair de son corps forme des bulles autour de son cou. Ses bras courts sont blancs et arrondis, tandis que ses pieds sont bleu foncé avec trois orteils chacun. Il a également une queue plate bleu foncé.</p>
                <p>Moustillon est inspiré d\'une jeune loutre de mer et d\'un samouraï. La façon dont son « coupillage » repose sur son ventre ressemble à une loutre gardant la coquille d\'un coquillage sur son ventre en mangeant. Il ressemble également à un éventail de guerre de tessen-jutsu. ',
                'caracteristiques' => [  'titre' => 'Caractéristiques',
                    'contenu' => [
                    ['cle' => 'Taille', 'valeur' => '0.5 m'],
                    ['cle' => 'Poids', 'valeur' => '5.9 kg'],
                    ['cle' => 'Evolution', 'valeur' => 'Niveau 17'],
                    ['cle' => 'PV', 'valeur' => '55'],
                    ['cle' => 'Attaque', 'valeur' => '55'],
                    ['cle' => 'Defense', 'valeur' => '45'],
                    ['cle' => 'Atq. Spé', 'valeur' => '63'],
                    ['cle' => 'Déf. Spé', 'valeur' => '45'],
                    ['cle' => 'Vitesse', 'valeur' => '45']
                ]
                
            ]
            ],
            'feu' => [
                'h4' => 'Type Feu',
                'h5' => 'Gruikui | n°498',
                'audio' => 'https://www.pokepedia.fr/images/7/7c/Cri_5_n_498.ogg',
                'img' => './images/starters/g5_gruikui.png',
                'alt' => 'image de gruikui',
                'version' => '<span>Version</span> : Noir & Blanc',
                'evolution' => '<span>Evolution</span> : Grotichon, Roitiflam',
                'description' => 'Gruikui est un petit Pokémon quadrupède à l\'allure porcine et au corps principalement de couleur orange. Il a de grands yeux ovales, un groin rose foncé et un marquage jaune en forme de feuille qui va de son groin jusqu\'entre ses yeux. La partie supérieure de sa tête est noire et ses longues oreilles pointues sont proches l\'une de l\'autre. Une bande noire couvre son ventre, son dos et son postérieur. Il a de courtes pattes et ses sabots antérieurs sont de couleur noire. Sa fine queue entortillée se termine par une sphère rose de la même couleur que son groin.</p>
                <p>Gruikui est inspiré d\'un porcelet d\'angler sattelschwein.</p>
                <p>Gruikui est un Pokémon habile capable de cracher du feu à partir de son groin. Cependant, s\'il est malade, tout ce qu\'il en sortira est une épaisse fumée noire. Gruikui fait généralement griller des Baies avant de les manger, mais il lui arrive souvent de les carboniser. Avant la huitième génération, sa capacité signature était Tacle Feu. ',
                'caracteristiques' => [  'titre' => 'Caractéristiques',
                    'contenu' => [
                    ['cle' => 'Taille', 'valeur' => '0.5 m'],
                    ['cle' => 'Poids', 'valeur' => '9.9 kg'],
                    ['cle' => 'Evolution', 'valeur' => 'Niveau 17'],
                    ['cle' => 'PV', 'valeur' => '65'],
                    ['cle' => 'Attaque', 'valeur' => '63'],
                    ['cle' => 'Defense', 'valeur' => '45'],
                    ['cle' => 'Atq. Spé', 'valeur' => '45'],
                    ['cle' => 'Déf. Spé', 'valeur' => '45'],
                    ['cle' => 'Vitesse', 'valeur' => '45']
                ]
                
            ]
            ],
            'plante' => [
                'h4' => 'Type Plante',
                'h5' => 'Vipélierre | n°495',
                'audio' => 'https://www.pokepedia.fr/images/e/e7/Cri_5_n_495.ogg',
                'img' => 'images/starters/g5_vipelierre.png',
                'alt' => 'image de vipélierre',
                'version' => '<span>Version</span> : Noir & Blanc',
                'evolution' => '<span>Evolution</span> : Lianaja, Majaspic',
                'description' => 'Vipélierre est un Pokémon reptilien bipède à l\'allure svelte. Son corps est principalement vert avec un ventre couleur crème. Une rayure jaune traverse son dos et sa queue sur toute la longueur, qui rappelle les marques jaunes autour de ses grands yeux marron, ainsi que les deux feuilles de la même couleur qui sortent de ses épaules et qui sont recourbées vers l\'arrière. Il a trois doigts à chaque bras, mais pas d\'orteils aux pieds. Il a une grande feuille à trois pointes au bout de la queue. Cette queue est capable d\'effectuer la photosynthèse, ce qui permet à Vipélierre d\'acquérir plus de vitesse. Cependant, elle s\'affaisse lorsque Vipélierre perd de l\'énergie. Ce Pokémon est généralement calme et serein.</p>
                <p>Le design de Vipélierre est inspiré d\'une variété de serpents au museau pointu, notamment le Oxybelis fulgidus, le Ahaetulla nasuta et le Ahaetulla prasina. Ses couleurs sont inspirées de celles de la couleuvre verte. La combinaison de caractéristiques reptiliennes peuvent également venir du Plestiodon reynoldsi, un lézard qui ressemble à un serpent. La forme de sa tête, de son corps, et les excroissances de ses épaules font penser aux oiseaux du paradis. ',
                'caracteristiques' => [  'titre' => 'Caractéristiques',
                    'contenu' => [
                    ['cle' => 'Taille', 'valeur' => '0.6 m'],
                    ['cle' => 'Poids', 'valeur' => '8.1 kg'],
                    ['cle' => 'Evolution', 'valeur' => 'Niveau 17'],
                    ['cle' => 'PV', 'valeur' => '45'],
                    ['cle' => 'Attaque', 'valeur' => '45'],
                    ['cle' => 'Defense', 'valeur' => '55'],
                    ['cle' => 'Atq. Spé', 'valeur' => '45'],
                    ['cle' => 'Déf. Spé', 'valeur' => '55'],
                    ['cle' => 'Vitesse', 'valeur' => '63']
                ]
            ]
            ]
            
        ]
    ],
    [
        'id' => 'g6',
        'h3' => 'Génération VI',
        'dataPos' => '3',
        'class' => 'gen6',
        'type' => [
            'eau' => [
                'h4' => 'Type Eau',
                'h5' => 'Grenousse | n°656',
                'audio' => 'https://www.pokepedia.fr/images/1/16/Cri_6_x_656.ogg',
                'img' => 'images/starters/g6_grenousse.png',
                'alt' => 'image de grenousse',
                'version' => '<span>Version</span> : X & Y',
                'evolution' => '<span>Evolution</span> : Croâporal, Amphinobi',
                'description' => 'Grenousse est un Pokémon quadrupède qui ressemble à une grenouille. Sa peau est principalement bleu clair, à l\'exception de ses mains qui sont blanches et d\'une bande au milieu de ses yeux qui est d\'un bleu plus foncé. Ses yeux sont noirs avec une sclère jaune et sont si gros qu\'ils sortent à la verticale de sa tête. Il a une crinière de bulles sur le buste et le dos ainsi que deux petites bulles sur le nez. Il a trois doigts à chaque main et deux orteils à chaque pied.</p>
                <p>Grenousse est inspiré d\'un batracien. La mousse de bulles qu\'il porte autour du cou ressemble aux nids de mousse que certaines espèces de grenouilles, comme la Engystomops pustulosus ou la Chiromantis xerampelina créent pour protéger leurs Œufs. Cette mousse ressemble également à un sac à dos, et est utilisée dans le dessin animé comme une capuche, qui rapproche Grenousse du dorobō, un voleur de la culture japonaise qui utilise des sacs en tissu pour à la fois voler et masquer son identité. De plus, dans les anciens jeux, la classe de personnage du voleur prenait souvent l\'apparence d\'un dorobō. De plus, avec ses évolutions, ces caractéristiques et son lien avec le vol, Grenousse peut être associé aux ninjas. ',
                'caracteristiques' => [  'titre' => 'Caractéristiques',
                    'contenu' => [
                    ['cle' => 'Taille', 'valeur' => '0.3 m'],
                    ['cle' => 'Poids', 'valeur' => '7.0 kg'],
                    ['cle' => 'Evolution', 'valeur' => 'Niveau 16'],
                    ['cle' => 'PV', 'valeur' => '41'],
                    ['cle' => 'Attaque', 'valeur' => '56'],
                    ['cle' => 'Defense', 'valeur' => '40'],
                    ['cle' => 'Atq. Spé', 'valeur' => '62'],
                    ['cle' => 'Déf. Spé', 'valeur' => '44'],
                    ['cle' => 'Vitesse', 'valeur' => '71']
                ]
                ]
            ],
            'feu' => [
                'h4' => 'Type Feu',
                'h5' => 'Feunnec | n°653',
                'audio' => 'https://www.pokepedia.fr/images/5/58/Cri_6_x_653.ogg',
                'img' => './images/starters/g6_feunnec.png',
                'alt' => 'image de feunnec',
                'version' => '<span>Version</span> : X & Y',
                'evolution' => '<span>Evolution</span> : Roussil, Goupelin',
                'description' => 'Feunnec est un petit Pokémon qui ressemble à un fennec. Il est principalement recouvert de fourrure jaune qui est plus longue sur ses hanches. Il a un museau blanc avec une touffe de fourrure sur chaque joue, de grands yeux orange et un nez pointu noir. Il a deux dents pointues sur la mâchoire supérieure visibles quand il ouvre la bouche. Des touffes de fourrure orange se trouvent à l\'intérieur de ses grandes oreilles. Il a des petites pattes fines sans doigts visibles. Sa queue est duveteuse avec une extrémité orange.</p>
                <p>Feunnec est inspiré du fennec. Il partage également des similitudes avec le kitsune, un renard mythique du folklore japonais qui peut générer du feu de sa queue ou de sa bouche et qui est souvent associé à la sorcellerie.</p>
                <p>Il libère de l\'air chaud de ses oreilles qui peut atteindre une température de plus de 200 degrés Celsius. Il utilise cette capacité pour intimider ses adversaires. Il récupère de l\'énergie en mordillant des brindilles. Il peut être un peu capricieux mais est très loyal à son Dresseur. ',
                'caracteristiques' => [  'titre' => 'Caractéristiques',
                    'contenu' => [
                    ['cle' => 'Taille', 'valeur' => '0.4 m'],
                    ['cle' => 'Poids', 'valeur' => '9.4 kg'],
                    ['cle' => 'Evolution', 'valeur' => 'Niveau 16'],
                    ['cle' => 'PV', 'valeur' => '40'],
                    ['cle' => 'Attaque', 'valeur' => '45'],
                    ['cle' => 'Defense', 'valeur' => '40'],
                    ['cle' => 'Atq. Spé', 'valeur' => '62'],
                    ['cle' => 'Déf. Spé', 'valeur' => '60'],
                    ['cle' => 'Vitesse', 'valeur' => '60']
                ]
                ]
            ],
            'plante' => [
                'h4' => 'Type Plante',
                'h5' => 'Marisson | n°650',
                'audio' => 'https://www.pokepedia.fr/images/0/08/Cri_6_x_650.ogg',
                'img' => 'images/starters/g6_marisson.png',
                'alt' => 'image de marisson',
                'version' => '<span>Version</span> : X & Y',
                'evolution' => '<span>Evolution</span> : Boguérisse, Blindépique',
                'description' => 'Marisson est un Pokémon bipède à l\'allure mammalienne. Son corps est principalement brun clair, à l\'exception de ses bras et des marquages triangulaires sur son visage qui sont plus foncés. Il a des yeux ovales marron, un museau triangulaire rouge et des incisives semblables à celles des rongeurs. Ses bras ont trois doigts tandis que ses pieds ont deux longues griffes. Une solide carapace de couleur verte couvre son dos et s\'étend autour de sa tête et jusqu\'à sa queue, dont la partie visible est orange. Il y a un petit trou dans sa carapace à l\'arrière de sa tête. Il a quatre épines qui ressemblent à des feuilles autour de la tête, ainsi qu\'une épine à l\'arrière de la tête qui se divise en trois parties.</p>

                <p>Marisson est inspiré du hérisson et de la bogue de la châtaigne.</p>
                
                <p>Marisson se protège des attaques trop puissantes avec sa carapace. Les feuilles se trouvant sur sa tête sont généralement souples, mais elles peuvent s\'endurcir pour attaquer. Même si sa nature curieuse lui attire souvent des ennuis, il est très optimiste. ',
                'caracteristiques' => [  'titre' => 'Caractéristiques',
                    'contenu' => [
                    ['cle' => 'Taille', 'valeur' => '0.4 m'],
                    ['cle' => 'Poids', 'valeur' => '9.0 kg'],
                    ['cle' => 'Evolution', 'valeur' => 'Niveau 16'],
                    ['cle' => 'PV', 'valeur' => '56'],
                    ['cle' => 'Attaque', 'valeur' => '61'],
                    ['cle' => 'Defense', 'valeur' => '65'],
                    ['cle' => 'Atq. Spé', 'valeur' => '48'],
                    ['cle' => 'Déf. Spé', 'valeur' => '45'],
                    ['cle' => 'Vitesse', 'valeur' => '38']
                ]
                ]
            ]
        ]
    ],
    [
        'id' => 'g7',
        'h3' => 'Génération VII',
        'dataPos' => '4',
        'class' => 'gen7',
        'type' => [
            'eau' => [
                'h4' => 'Type Eau',
                'h5' => 'Otaquin | n°728',
                'audio' => 'https://www.pokepedia.fr/images/d/de/Cri_7_s_728.ogg',
                'img' => 'images/starters/g7_otaquin.png',
                'alt' => 'image de otaquin',
                'version' => '<span>Version</span> : Soleil & Lune',
                'evolution' => '<span>Evolution</span> : Otarlette, Oratoria',
                'description' => 'Otaquin est un Pokémon pinnipède au corps principalement bleu. Il a de grands yeux, un long museau blanc avec des moustaches noires et un nez rond et rose. Il a des petites oreilles de chaque côté de la tête. Il a autour du cou une collerette bleu ciel qui s\'étend sur ses épaules. Ses nageoires pectorales sont plus développées que sa nageoire caudale, avec deux marquages blancs qui délimitent ses doigts.</p>

                <p>Otaquin est inspiré des otaries et du phoque moine, une espèce endémique et originaire de l\'archipel d\'Hawaii. Il partage également des similitudes avec un clown et fait référence au fait que les otaries sont souvent utilisées comme animaux de spectacle dans les cirques.</p>
                
                <p>Otaquin est capable de créer des bulles d\'eau avec son nez, qu\'il utilise pendant les combats. Sur terre, il utilise l\'élasticité de ces bulles pour faire des sauts et des tours acrobatiques. Il s\'entraîne quotidiennement en faisant des bulles de plus en plus grosses. Il peut nager jusqu\'à plus de 40 km/h. ',
                'caracteristiques' => [  'titre' => 'Caractéristiques',
                    'contenu' => [
                    ['cle' => 'Taille', 'valeur' => '0.4 m'],
                    ['cle' => 'Poids', 'valeur' => '7.5 kg'],
                    ['cle' => 'Evolution', 'valeur' => 'Niveau 17'],
                    ['cle' => 'PV', 'valeur' => '50'],
                    ['cle' => 'Attaque', 'valeur' => '54'],
                    ['cle' => 'Defense', 'valeur' => '54'],
                    ['cle' => 'Atq. Spé', 'valeur' => '66'],
                    ['cle' => 'Déf. Spé', 'valeur' => '56'],
                    ['cle' => 'Vitesse', 'valeur' => '40']
                ]
                ]
            ],
            'feu' => [
                'h4' => 'Type Feu',
                'h5' => 'Flamiaou | n°725',
                'audio' => 'https://www.pokepedia.fr/images/3/33/Cri_7_s_725.ogg',
                'img' => 'images/starters/g7_flamiaou.png',
                'alt' => 'image de flamiaou',
                'version' => '<span>Version</span> : Soleil & Lune',
                'evolution' => '<span>Evolution</span> : Matoufeu, Félinferno',
                'description' => 'Flamiaou est un Pokémon félin à quatre pattes à la fourrure principalement noire. Il a un petit museau avec un minuscule nez noir, des yeux rouges avec une sclère jaune et des petites oreilles pointues grises à l\'intérieur. Il a deux rayures rouges autour des jambes, et un motif de croix double rouge sur le front. La partie inférieure de la tête de Flamiaou est également rouge, avec une touffe de fourrure rouge sur chaque joue. Il a une touffe de fourrure noire au bout de sa longue queue. Quand il fait le gros dos, trois touffes de fourrure aux extrémités rouges se hérissent le long de sa colonne vertébrale.

                Flamiaou est inspiré des chats tigrés.
                
                Flamiaou est un Pokémon solitaire qui ne montre généralement pas ses émotions et auquel il est préférable de ne pas donner trop d\'affection. Quand il se lave, il récolte sa fourrure dans son estomac. En embrasant cette fourrure, il peut cracher des boules de feu qui changent la façon dont il les crache. Sa fourrure est recouverte d\'une huile inflammable qui, lorsqu\'il mue, prend feu. Sa fourrure repousse deux fois dans l\'année. ',
                'caracteristiques' => [  'titre' => 'Caractéristiques',
                    'contenu' => [
                    ['cle' => 'Taille', 'valeur' => '0.4 m'],
                    ['cle' => 'Poids', 'valeur' => '4.3 kg'],
                    ['cle' => 'Evolution', 'valeur' => 'Niveau 17'],
                    ['cle' => 'PV', 'valeur' => '45'],
                    ['cle' => 'Attaque', 'valeur' => '65'],
                    ['cle' => 'Defense', 'valeur' => '40'],
                    ['cle' => 'Atq. Spé', 'valeur' => '60'],
                    ['cle' => 'Déf. Spé', 'valeur' => '40'],
                    ['cle' => 'Vitesse', 'valeur' => '70']
                ]
                ]
            ],
            'plante' => [
                'h4' => 'Type Plante',
                'h5' => 'Brindibou | n°722',
                'audio' => 'https://www.pokepedia.fr/images/8/8b/Cri_7_s_722.ogg',
                'img' => 'images/starters/g7_brindibou.png',
                'alt' => 'image de brindibou',
                'version' => '<span>Version</span> : Soleil & Lune',
                'evolution' => '<span>Evolution</span> : Efflèche, Archéduc',
                'description' => 'Brindibou est un petit Pokémon aviaire qui ressemble à une jeune chouette avec un corps rond et des petites pattes. Son plumage est principalement beige, à l\'exception de son visage et de son ventre, qui sont tous deux blancs. Il a de grands yeux noirs et un bec trapu. La partie supérieure de son bec est blanche, tandis que la partie inférieure est marron orangé. Ses pattes, de la même couleur que la partie inférieure de son bec, ont trois serres : deux pointant vers l\'avant et une pointant à l\'arrière. Deux feuilles poussent sur son buste pour créer l\'illusion d\'un nœud papillon. On trouve également des feuilles à la place de sa queue et sous ses ailes.</p>

                <p>Brindibou est inspiré de la chouette, et plus particulièrement de la chouette effraie, qui possède également un visage marqué de blanc et des yeux sombres. Son type Plante pourrait lui venir d\'une des espèces de Tytonidae, l\'effraie de prairie.</p>
                
                <p>Dans Légendes Pokémon : Arceus, le Brindibou présenté par le Professeur Lavande a un comportement amical, et vient de lui-même s\'approcher du protagoniste. En revanche, s\'il est trouvé dans une Distorsion Spatio-Temporelle, il est alors agressif. ',
                'caracteristiques' => [  'titre' => 'Caractéristiques',
                    'contenu' => [
                    ['cle' => 'Taille', 'valeur' => '0.3 m'],
                    ['cle' => 'Poids', 'valeur' => '1.5 kg'],
                    ['cle' => 'Evolution', 'valeur' => 'Niveau 17'],
                    ['cle' => 'PV', 'valeur' => '68'],
                    ['cle' => 'Attaque', 'valeur' => '55'],
                    ['cle' => 'Defense', 'valeur' => '55'],
                    ['cle' => 'Atq. Spé', 'valeur' => '50'],
                    ['cle' => 'Déf. Spé', 'valeur' => '50'],
                    ['cle' => 'Vitesse', 'valeur' => '42']
                ]
                ]
            ]
        ]
    ],
    [
        'id' => 'g8',
        'h3' => 'Génération IIX',
        'dataPos' => '5',
        'class' => 'gen8',
        'type' => [
            'eau' => [
                'h4' => 'Type Eau',
                'h5' => 'Larméléon | n°816',
                'audio' => 'https://www.pokepedia.fr/images/4/45/Cri_816_EB.ogg',
                'img' => 'images/starters/g8_larmeleon.png',
                'alt' => 'image de larméléon',
                'version' => '<span>Version</span> : Epée & Bouclier',
                'evolution' => '<span>Evolution</span> : Arrozard, Lézargus',
                'description' => 'Larméléon est un petit Pokémon à la peau bleu clair avec quelques taches plus foncées et un visage et un ventre plus clairs. Ses yeux sont également d\'un bleu foncé. Il a une excroissance bleue et jaune qui ressemble à une nageoire sur le haut de la tête. Sa queue est enroulée vers l\'intérieur ; son extrémité est plus foncée que sa peau. Il a quatre petits membres, chacun se terminant par deux fines excroissances qu\'il utilise pour s\'accrocher aux murs et ainsi les escalader plus rapidement.</p>

                <p>Larméléon est principalement inspiré du caméléon. Son type Eau et la crête sur sa tête rappellent le basilic commun.</p>
                
                <p>Il peut se déplacer sur ses quatre pattes ou sur ses deux pattes arrière en utilisant ses pattes antérieures comme des mains. Il peut se camoufler dans l\'eau ; quand il touche de l\'eau, ses couleurs changent et il devient transparent. Il est très timide et dès qu\'il est un peu nerveux ou embarrassé, son corps sécrète de l\'eau afin qu\'il puisse disparaître. Les larmes de Larméléon ont la capacité de faire pleurer les gens autant que cent oignons. Quand il se sent menacé, il tournoie en lançant ses larmes aux alentours, ce qui fait pleurer tous ceux l\'entourant. Il utilise cette distraction pour s\'échapper. ',
                'caracteristiques' => [  'titre' => 'Caractéristiques',
                    'contenu' => [
                    ['cle' => 'Taille', 'valeur' => '0.3 m'],
                    ['cle' => 'Poids', 'valeur' => '4.0 kg'],
                    ['cle' => 'Evolution', 'valeur' => 'Niveau 16'],
                    ['cle' => 'PV', 'valeur' => '50'],
                    ['cle' => 'Attaque', 'valeur' => '40'],
                    ['cle' => 'Defense', 'valeur' => '40'],
                    ['cle' => 'Atq. Spé', 'valeur' => '70'],
                    ['cle' => 'Déf. Spé', 'valeur' => '40'],
                    ['cle' => 'Vitesse', 'valeur' => '70']
                ]
                ]
            ],
            'feu' => [
                'h4' => 'Type Feu',
                'h5' => 'Flambino | n°816',
                'audio' => 'https://www.pokepedia.fr/images/f/f9/Cri_813_EB.ogg',
                'img' => 'images/starters/g8_flambino.png',
                'alt' => 'image de flambino',
                'version' => '<span>Version</span> : Epée & Bouclier',
                'evolution' => '<span>Evolution</span> : Lapyro, Pyrobut',
                'description' => 'Flambino est un Pokémon bipède, au pelage principalement blanc. Il a des marques orange et jaunes sur les oreilles, les pattes postérieures et le nez. Il a une incisive proéminente, deux grands yeux noirs et orange un petit nez orange surmonté d\'un dessin rectangulaire jaune faisant penser à un pansement. Il a de longues jambes avec de grandes pattes postérieures.Il possède également deux marquages rectangulaires sur ses voûtes plantaires. L\'apparence de ce Pokémon est inspirée du lapin.</p>

                <p>Quand Flambino court, l\'énergie qui brûle en lui se met à traverser son corps, ce qui lui permet de se battre à pleine puissance et de laisser au passage quelques traînées ardentes derrière lui. Les marquages qu\'il a sur le nez et sous les pattes peuvent générer de la chaleur quand il est prêt à se battre. Flambino adore courir et est rempli d\'énergie. Il utilise ses puissantes pattes postérieures pour courir et sauter autour de ses adversaires pour les désorienter.',
                'caracteristiques' => [  'titre' => 'Caractéristiques',
                    'contenu' => [
                    ['cle' => 'Taille', 'valeur' => '0.3 m'],
                    ['cle' => 'Poids', 'valeur' => '4.5 kg'],
                    ['cle' => 'Evolution', 'valeur' => 'Niveau 16'],
                    ['cle' => 'PV', 'valeur' => '50'],
                    ['cle' => 'Attaque', 'valeur' => '71'],
                    ['cle' => 'Defense', 'valeur' => '40'],
                    ['cle' => 'Atq. Spé', 'valeur' => '40'],
                    ['cle' => 'Déf. Spé', 'valeur' => '40'],
                    ['cle' => 'Vitesse', 'valeur' => '69']
                ]
                ]
            ],
            'plante' => [
                'h4' => 'Type Plante',
                'h5' => 'Ouistempo| n°810',
                'audio' => 'https://www.pokepedia.fr/images/a/a5/Cri_810_EB.ogg',
                'img' => 'images/starters/g8_ouistempo.png',
                'alt' => 'image de ouistempo',
                'version' => '<span>Version</span> : Epée & Bouclier',
                'evolution' => '<span>Evolution</span> : Badabouin, Gorythmic',
                'description' => 'Ouistempo est un Pokémon qui ressemble à un jeune primate, au corps principalement vert avec une queue et des oreilles brunes ainsi que des membres et un museau orange. Il a de grands yeux noirs entourés d\'un marquage de couleur jaune pâle qui ressemble à un masque. Il a sur le haut de la tête deux touffes de fourrure ressemblant à des feuilles avec un petit bâton les traversant.</p>

                <p>L\'apparence de Ouistempo est inspirée de celle d\'un sapajou ou d\'un macaque. Son comportement peut faire référence au fait que les macaques frappent des objets de manière rythmique pour montrer une dominance sociale. Ce qu\'utilise Ouistempo pour faire de la musique ressemble à une baguette de batterie ou à une baguette décorative. Il est peut-être également inspiré de la croyance que la musique stimule la croissance des plantes.</p>
                
                <p>Il utilise son bâton pour taper rythmiquement les surfaces de toutes sortes d\'objets. Ce phénomène semble faire pousser l\'herbe et redonner leurs couleurs aux fleurs et aux feuilles autour de Ouistempo. On dit qu\'il regorge d\'une curiosité sans limites. Son bâton est à l\'origine issu d\'une branche venant de la forêt où de nombreux Ouistempo vivaient, et a des pouvoirs spéciaux grâce à l\'énergie contenue dans le corps de Ouistempo. Sa fourrure peut créer de l\'énergie grâce au soleil. ',
                'caracteristiques' => [  'titre' => 'Caractéristiques',
                    'contenu' => [
                    ['cle' => 'Taille', 'valeur' => '0.3 m'],
                    ['cle' => 'Poids', 'valeur' => '5.0 kg'],
                    ['cle' => 'Evolution', 'valeur' => 'Niveau 16'],
                    ['cle' => 'PV', 'valeur' => '50'],
                    ['cle' => 'Attaque', 'valeur' => '65'],
                    ['cle' => 'Defense', 'valeur' => '50'],
                    ['cle' => 'Atq. Spé', 'valeur' => '40'],
                    ['cle' => 'Déf. Spé', 'valeur' => '40'],
                    ['cle' => 'Vitesse', 'valeur' => '65']
                ]
                ]
            ]
        ]
    ]
];
