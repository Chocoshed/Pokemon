<?php

$aside = [
    'titre' => 'Contact',
    'lien' => [
        ['href' => 'page2_starters.php', 'nom' => 'Starters'],
        ['href' => 'page3_regions.php', 'nom' => 'Régions'],
        ['href' => 'page4_objets.php', 'nom' => 'Objets']
    ]
];

$main = [
    'title' => 'Formulaire de contact',
    'first_fieldset' => [
        'legend' => 'Vous êtes :',
        'name' => 'sexe',
        'radios' => [
            [
                'value' => 'femme',
                'id' => 'femme',
                'label' => 'Une femme'
            ],
            [
                'value' => 'homme',
                'id' => 'homme',
                'label' => 'Un Homme'
            ],
            [
                'value' => 'autre',
                'id' => 'autre',
                'label' => 'Autre :'
            ]
        ],
        'precision_id' => 'precision',
        'precision_placeholder' => 'Précisez...',
        'p' => '(Choix Exclusif)'
    ],
    'second_fieldset' => [
        'legend' => 'Vous avez joué à :',
        'name' => 'jeux',
        'checkboxes' => [
            [
                'id' => 'rvb',
                'value' => 'rouge,vert,bleu',
                'label' => 'Rouge et Vert/Bleu'
            ],
            [
                'id' => 'jaune',
                'value' => 'jaune',
                'label' => 'Jaune'
            ],
            [
                'id' => 'oa',
                'value' => 'or et argent',
                'label' => 'Or et Argent'
            ],
            [
                'id' => 'rs',
                'value' => 'rubis et saphir',
                'label' => 'Rubis et Saphir'
            ],
            [
                'id' => 'dp',
                'value' => 'diamant et perle',
                'label' => 'Diamant et Perle'
            ],
            [
                'id' => 'nb',
                'value' => 'noir et blanc',
                'label' => 'Noir et Blanc'
            ],
            [
                'id' => 'xy',
                'value' => 'x et y',
                'label' => 'X et Y'
            ],
            [
                'id' => 'sl',
                'value' => 'soleil et lune',
                'label' => 'Soleil et Lune'
            ],
            [
                'id' => 'eb',
                'value' => 'épée et bouclier',
                'label' => 'Epée et Bouclier'
            ],
            [
                'id' => 'ev',
                'value' => 'ecarlat et violet',
                'label' => 'Ecarlat et Violet'
            ]
        ],
        'p' => '(Choix multiples)'
    ],
    'third_fieldset' => [
        'legend' => 'Votre profil :',
        'age' => [
            'id' => 'age',
            'label' => 'Votre âge :',
            'name' => 'age'
        ],
        'statut' => [
            'id' => 'statut',
            'label' => 'Votre statut :',
            'name' => 'statut',
            'optgroup' => [
                'label_act' => 'En activité',
                'activites' =>
                [
                    [
                        'value' => 'ouvrier',
                        'label' => 'Ouvrier'
                    ],
                    [
                        'value' => 'employé',
                        'label' => 'Employé'
                    ],
                    [
                        'value' => 'technicien',
                        'label' => 'Technicien'
                    ],
                    [
                        'value' => 'agent de maitrise',
                        'label' => 'Agent de maîtrise'
                    ],
                    [
                        'value' => 'ingénieur',
                        'label' => 'Ingénieur'
                    ],
                    [
                        'value' => 'cadre',
                        'label' => 'Cadre'
                    ]
                ],
                'label_autre' => 'Autre',
                'autre' => [
                    [
                        'value' => 'étudiant',
                        'label' => 'Etudiant'
                    ],
                    [
                        'value' => 'retraité',
                        'label' => 'Retraité'
                    ]
                ]
            ]
        ],
        'ville' => [
            'label' => 'Votre ville :',
            'placeholder' => 'Nom de ville'
        ],
        'mail' => [
            'label' => 'Votre mail :',
            'placeholder' => 'ex: votremail@gmail.com'
        ],
        'origine' => [
            'id' => 'origine',
            'name' => 'origine',
            'label' => 'Votre origine :',
            'pays' => [
                'France',
                'USA',
                'UK'
            ]
        ]
    ],
    'commentaire_fieldset' => [
        'legend' => 'Commentaires :',
        'placeholder' => 'Vous pouvez insérer vos commentaires ici ....'
    ],
    'button' => [
        'alert' => 'Votre message a été envoyé !'
    ]
];
