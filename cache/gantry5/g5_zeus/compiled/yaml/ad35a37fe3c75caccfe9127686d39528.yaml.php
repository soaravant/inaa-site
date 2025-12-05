<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/sotiris/Downloads/default_site_backup--20250926220607/user/themes/g5_zeus/blueprints/styles/font.yaml',
    'modified' => 1764939253,
    'data' => [
        'name' => 'Font Families',
        'description' => 'Font families for the Zeus theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'family-default' => [
                    'type' => 'input.fonts',
                    'label' => 'Body Font',
                    'default' => 'Lato, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ],
                'family-title' => [
                    'type' => 'input.fonts',
                    'label' => 'Title Font',
                    'default' => 'Lato, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ],
                'family-quote' => [
                    'type' => 'input.fonts',
                    'label' => 'Quote Font',
                    'default' => 'Lato, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ]
            ]
        ]
    ]
];
