<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/sotiris/Downloads/default_site_backup--20250926220607/user/themes/g5_zeus/blueprints/styles/navigation.yaml',
    'modified' => 1764939253,
    'data' => [
        'name' => 'Navigation Styles',
        'description' => 'Navigation section styles for the Zeus theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#ffffff'
                ],
                'link-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Link',
                    'default' => '#ffffff'
                ],
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Custom Background',
                    'description' => 'Choose a custom background color. Select Transparent to hide background when used with full screen images',
                    'default' => '#0071bc'
                ]
            ]
        ]
    ]
];
