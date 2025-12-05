<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/sotiris/Downloads/default_site_backup--20250926220607/user/themes/g5_zeus/particles/timelineSZ.yaml',
    'modified' => 1764939829,
    'data' => [
        'name' => 'Timeline',
        'description' => 'Displays events in timeline format',
        'type' => 'particle',
        'icon' => 'fa-calendar-times-o',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable the particle.',
                    'default' => true
                ],
                'maintitle' => [
                    'type' => 'input.text',
                    'label' => 'Headline',
                    'description' => 'Title for the timeline',
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
                    'description' => 'Short description for the timeline.',
                    'placeholder' => 'Enter short description'
                ],
                'events' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Events',
                    'description' => 'Create timeline events.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.date' => [
                            'type' => 'input.text',
                            'label' => 'Date of the event',
                            'description' => 'Customize the headline text.',
                            'placeholder' => 'Enter free text eg. 2018, 2000 Changed Career'
                        ],
                        '.eventTitle' => [
                            'type' => 'input.text',
                            'label' => 'Event Title',
                            'description' => 'Customize the title of the event',
                            'placeholder' => 'Enter free text'
                        ],
                        '.eventSubtitle' => [
                            'type' => 'input.text',
                            'label' => 'Event Subtitle',
                            'description' => 'Customize the subtitle of the event',
                            'placeholder' => 'Enter free text'
                        ],
                        '.description' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description',
                            'description' => 'Describe the event.',
                            'placeholder' => 'Enter short description'
                        ],
                        '.position' => [
                            'type' => 'select.selectize',
                            'label' => 'Position',
                            'description' => 'Define the position of the block.',
                            'placeholder' => 'left, right',
                            'default' => 'left',
                            'options' => [
                                'left' => 'left',
                                'right' => 'right'
                            ]
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
];
