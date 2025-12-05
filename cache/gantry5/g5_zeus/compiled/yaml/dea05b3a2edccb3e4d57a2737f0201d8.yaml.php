<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/sotiris/Downloads/default_site_backup--20250926220607/user/themes/g5_zeus/particles/contentframeSZ.yaml',
    'modified' => 1764939829,
    'data' => [
        'name' => 'Content Frame',
        'description' => 'Displays Content with image/icon',
        'type' => 'particle',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable the particle.',
                    'default' => true
                ],
                'image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Image',
                    'description' => 'Select the main image.',
                    'placeholder' => 'Select an image'
                ],
                'mainicon' => [
                    'type' => 'input.icon',
                    'label' => 'Icon',
                    'description' => 'Select the main icon'
                ],
                'maintitle' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.',
                    'placeholder' => 'Enter free text'
                ],
                'subtitle' => [
                    'type' => 'input.text',
                    'label' => 'Subtitle',
                    'description' => 'Customize the subtitle text.',
                    'placeholder' => 'Enter free text'
                ],
                'description' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Description',
                    'description' => 'Customize the description.',
                    'placeholder' => 'Enter short description'
                ]
            ]
        ]
    ]
];
