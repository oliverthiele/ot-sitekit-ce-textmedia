<?php

$EM_CONF['ot_sitekitcetextmedia'] = [
    'title' => 'CE Textmedia',
    'description' => 'TYPO3 content element that displays an image with text. Integrates with the Sitekit and ot-irrebuttons extensions.',
    'category' => 'frontend',
    'author' => 'Oliver Thiele',
    'author_email' => 'mail@oliver-thiele.de',
    'author_company' => 'Web Development Oliver Thiele',
    'state' => 'stable',
    'version' => '3.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '14.3.0-14.99.99',
            'php' => '8.4.0-8.99.99',
            'ot_sitekitbase' => '1.0.0-1.99.99',
            'ot_ceheader' => '3.0.0-3.99.99',
            'ot_irrebuttons' => '5.0.0-5.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
