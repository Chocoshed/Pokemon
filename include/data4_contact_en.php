<?php

$aside = [
    'titre' => 'Contact',
    'lien' => [
        ['href' => 'page2_starters.php', 'nom' => 'Starters'],
        ['href' => 'page3_regions.php', 'nom' => 'Regions'],
        ['href' => 'page4_objets.php', 'nom' => 'Items']
    ]
];


$main = [
    'title' => 'Contact form',
    'first_fieldset' => [
        'legend' => 'You are :',
        'name' => 'sexe',
        'radios' => [
            [
                'value' => 'femme',
                'id' => 'femme',
                'label' => 'Woman'
            ],
            [
                'value' => 'homme',
                'id' => 'homme',
                'label' => 'Man'
            ],
            [
                'value' => 'autre',
                'id' => 'autre',
                'label' => 'Other :'
            ]
        ],
        'precision_id' => 'precision',
        'precision_placeholder' => 'Specify...',
        'p' => '(Exclusive choice)'
    ],
    'second_fieldset' => [
        'legend' => 'You played :',
        'name' => 'jeux',
        'checkboxes' => [
            [
                'id' => 'rvb',
                'value' => 'rouge,vert,bleu',
                'label' => 'Red and Green/Blue'
            ],
            [
                'id' => 'jaune',
                'value' => 'jaune',
                'label' => 'Yellow'
            ],
            [
                'id' => 'oa',
                'value' => 'or et argent',
                'label' => 'Gold and Silver'
            ],
            [
                'id' => 'rs',
                'value' => 'rubis et saphir',
                'label' => 'Ruby and Sapphire'
            ],
            [
                'id' => 'dp',
                'value' => 'diamant et perle',
                'label' => 'Diamond and Pearl'
            ],
            [
                'id' => 'nb',
                'value' => 'noir et blanc',
                'label' => 'Black and White'
            ],
            [
                'id' => 'xy',
                'value' => 'x et y',
                'label' => 'X an Y'
            ],
            [
                'id' => 'sl',
                'value' => 'soleil et lune',
                'label' => 'Sun and Moon'
            ],
            [
                'id' => 'eb',
                'value' => 'épée et bouclier',
                'label' => 'Sword and Shield'
            ],
            [
                'id' => 'ev',
                'value' => 'ecarlat et violet',
                'label' => 'Scarlet and Violet'
            ]
        ],
        'p' => '(Multiple choice)'
    ],
    'third_fieldset' => [
        'legend' => 'Your profile :',
        'age' => [
            'id' => 'age',
            'label' => 'Your age :',
            'name' => 'age'
        ],
        'statut' => [
            'id' => 'statut',
            'label' => 'Your status :',
            'name' => 'statut',
            'optgroup' => [
                'label_act' => 'In activity',
                'activites' =>
                [
                    [
                        'value' => 'ouvrier',
                        'label' => 'Worker'
                    ],
                    [
                        'value' => 'employé',
                        'label' => 'Employee'
                    ],
                    [
                        'value' => 'technicien',
                        'label' => 'Technician'
                    ],
                    [
                        'value' => 'agent de maitrise',
                        'label' => 'Agent-control'
                    ],
                    [
                        'value' => 'ingénieur',
                        'label' => 'Engineer'
                    ],
                    [
                        'value' => 'cadre',
                        'label' => 'Executive Manager'
                    ]
                ],
                'label_autre' => 'Other',
                'autre' => [
                    [
                        'value' => 'étudiant',
                        'label' => 'Student'
                    ],
                    [
                        'value' => 'retraité',
                        'label' => 'Retreat'
                    ]
                ]
            ]
        ],
        'ville' => [
            'label' => 'Your city :',
            'placeholder' => 'City Name'
        ],
        'mail' => [
            'label' => 'Your email :',
            'placeholder' => 'ex: youremail@gmail.com'
        ],
        'origine' => [
            'id' => 'origine',
            'name' => 'origine',
            'label' => 'Your origin :',
            'pays' => [
                'France',
                'USA',
                'UK'
            ]
        ]
    ],
    'commentaire_fieldset' => [
        'legend' => 'Comments :',
        'placeholder' => 'You can insert your comments here ....'
    ],
    'button' => [
        'alert' => 'Your message has been sent !'
    ]
];
