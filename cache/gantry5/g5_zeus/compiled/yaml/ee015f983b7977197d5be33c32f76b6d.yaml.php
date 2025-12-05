<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/sotiris/Downloads/default_site_backup--20250926220607/user/themes/g5_zeus/particles/pricetableSZ.yaml',
    'modified' => 1764939253,
    'data' => [
        'name' => 'Price Table',
        'description' => 'Displays Price Table',
        'type' => 'particle',
        'icon' => 'fa-dollar',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable the particle.',
                    'default' => true
                ],
                '_tabs' => [
                    'type' => 'container.tabs',
                    'fields' => [
                        '_tab_maintitle' => [
                            'label' => 'Main',
                            'fields' => [
                                '.maintitle' => [
                                    'type' => 'input.text',
                                    'label' => 'Headline',
                                    'description' => 'Customize the headline text.',
                                    'placeholder' => 'Enter headline'
                                ],
                                '.subtitle' => [
                                    'type' => 'input.text',
                                    'label' => 'Subtitle',
                                    'description' => 'Customize the subtitle text.',
                                    'placeholder' => 'Enter free text'
                                ],
                                '.description' => [
                                    'type' => 'textarea.textarea',
                                    'label' => 'Description',
                                    'description' => 'Customize the description.',
                                    'placeholder' => 'Enter short description'
                                ]
                            ]
                        ],
                        '_tab_testimonials' => [
                            'label' => 'Pricetables',
                            'fields' => [
                                '.pricetables' => [
                                    'type' => 'collection.list',
                                    'array' => true,
                                    'label' => 'Items',
                                    'description' => 'Create each item to appear in the content row.',
                                    'value' => 'title',
                                    'ajax' => true,
                                    'fields' => [
                                        '.image' => [
                                            'type' => 'input.imagepicker',
                                            'label' => 'Image',
                                            'description' => 'Select the main image.',
                                            'placeholder' => 'Select an image'
                                        ],
                                        '.icon' => [
                                            'type' => 'input.icon',
                                            'label' => 'Icon'
                                        ],
                                        '.title' => [
                                            'type' => 'input.text',
                                            'label' => 'Title'
                                        ],
                                        '.price' => [
                                            'type' => 'input.text',
                                            'label' => 'Price'
                                        ],
                                        '.description' => [
                                            'type' => 'textarea.textarea',
                                            'label' => 'Description'
                                        ],
                                        '.line1' => [
                                            'type' => 'input.text',
                                            'label' => 'Line 1'
                                        ],
                                        '.line2' => [
                                            'type' => 'input.text',
                                            'label' => 'Line 2'
                                        ],
                                        '.line3' => [
                                            'type' => 'input.text',
                                            'label' => 'Line 3'
                                        ],
                                        '.line4' => [
                                            'type' => 'input.text',
                                            'label' => 'Line 4'
                                        ],
                                        '.link' => [
                                            'type' => 'input.text',
                                            'label' => 'Link',
                                            'description' => 'Specify the link address.'
                                        ],
                                        '.linktext' => [
                                            'type' => 'input.text',
                                            'label' => 'Link Text',
                                            'description' => 'Customize the link text.'
                                        ],
                                        '.class' => [
                                            'type' => 'input.block-variations',
                                            'label' => 'Variations'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
