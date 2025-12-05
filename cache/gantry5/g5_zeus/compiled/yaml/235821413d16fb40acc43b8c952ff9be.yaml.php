<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/sotiris/Downloads/default_site_backup--20250926220607/user/themes/g5_zeus/blueprints/styles/accent.yaml',
    'modified' => 1528152152,
    'data' => [
        'name' => 'Accent Colors',
        'description' => 'Accent colors for the Zeus theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'color-1' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Accent Color 1',
                    'description' => 'Used for contrast to the dominant color',
                    'default' => '#e31c3d'
                ],
                'color-2' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Accent Color 2',
                    'description' => 'Used as light background',
                    'default' => '#9bdaf1'
                ],
                'color-3' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Accent Color 3',
                    'description' => 'Used as dark background',
                    'default' => '#112e51'
                ]
            ]
        ]
    ]
];
