<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/sotiris/Downloads/default_site_backup--20250926220607/user/themes/g5_zeus/gantry/theme.yaml',
    'modified' => 1764939829,
    'data' => [
        'details' => [
            'name' => 'Zeus',
            'version' => '5.4.2701',
            'icon' => 'linux',
            'date' => 'January 04, 2019',
            'author' => [
                'name' => 'ThreeThemes',
                'email' => 'support@threethemes.com',
                'link' => 'https://threethemes.com'
            ],
            'documentation' => [
                'link' => 'http://docs.gantry.org/gantry5'
            ],
            'support' => [
                'link' => 'https://gitter.im/gantry/gantry5'
            ],
            'updates' => [
                'link' => 'http://updates.rockettheme.com/themes/zeus.yaml'
            ],
            'copyright' => '(C) 2019 ThreeThemes. All rights reserved.',
            'license' => 'GPLv2',
            'description' => 'Zeus Theme',
            'images' => [
                'thumbnail' => 'thumbnail.png',
                'preview' => 'screenshot.png'
            ]
        ],
        'configuration' => [
            'gantry' => [
                'platform' => 'grav',
                'engine' => 'nucleus'
            ],
            'theme' => [
                'parent' => 'g5_zeus',
                'base' => 'gantry-theme://common',
                'file' => 'gantry-theme://includes/theme.php',
                'class' => '\\Gantry\\Framework\\Theme'
            ],
            'fonts' => [
                'Raleway' => [
                    '900italic' => 'gantry-theme://fonts/raleway/raleway-blackitalic/raleway-blackitalic-webfont',
                    900 => 'gantry-theme://fonts/raleway/raleway-black/raleway-black-webfont',
                    '700italic' => 'gantry-theme://fonts/raleway/raleway-bold/raleway-bolditalic-webfont',
                    700 => 'gantry-theme://fonts/raleway/raleway-bold/raleway-bold-webfont',
                    '600italic' => 'gantry-theme://fonts/raleway/raleway-semibolditalic/raleway-semibolditalic-webfont',
                    600 => 'gantry-theme://fonts/raleway/raleway-semibold/raleway-semibold-webfont',
                    '500italic' => 'gantry-theme://fonts/raleway/raleway-mediumitalic/raleway-mediumitalic-webfont',
                    500 => 'gantry-theme://fonts/raleway/raleway-medium/raleway-medium-webfont',
                    '400italic' => 'gantry-theme://fonts/raleway/raleway-italic/raleway-italic-webfont',
                    400 => 'gantry-theme://fonts/raleway/raleway-regular/raleway-regular-webfont',
                    '200italic' => 'gantry-theme://fonts/raleway/raleway-lightitalic/raleway-lightitalic-webfont',
                    200 => 'gantry-theme://fonts/raleway/raleway-light/raleway-light-webfont'
                ],
                'Lato' => [
                    '900italic' => 'gantry-theme://fonts/lato/lato-blackitalic/lato-blackitalic-webfont',
                    900 => 'gantry-theme://fonts/lato/lato-black/lato-black-webfont',
                    '700italic' => 'gantry-theme://fonts/lato/lato-bold/lato-bolditalic-webfont',
                    700 => 'gantry-theme://fonts/lato/lato-bold/lato-bold-webfont',
                    '400italic' => 'gantry-theme://fonts/lato/lato-italic/lato-italic-webfont',
                    400 => 'gantry-theme://fonts/lato/lato-regular/lato-regular-webfont',
                    '200italic' => 'gantry-theme://fonts/lato/lato-lightitalic/lato-lightitalic-webfont',
                    200 => 'gantry-theme://fonts/lato/lato-light/lato-light-webfont'
                ]
            ],
            'css' => [
                'compiler' => '\\Gantry\\Component\\Stylesheet\\ScssCompiler',
                'target' => 'gantry-theme://css-compiled',
                'paths' => [
                    0 => 'gantry-theme://scss',
                    1 => 'gantry-engine://scss'
                ],
                'files' => [
                    0 => 'zeus',
                    1 => 'zeus-grav',
                    2 => 'custom'
                ],
                'persistent' => [
                    0 => 'zeus',
                    1 => 'zeus-grav'
                ],
                'overrides' => [
                    0 => 'custom'
                ]
            ],
            'dependencies' => [
                'gantry' => '5.4.0'
            ],
            'section-variations' => [
                'Padding Variations' => [
                    'section-vertical-paddings' => 'Section Vertical Paddings',
                    'section-horizontal-paddings' => 'Section Horizontal Paddings',
                    'section-vertical-paddings-large' => 'Large Vertical Paddings',
                    'section-horizontal-paddings-large' => 'Large Horizontal Paddings',
                    'section-vertical-paddings-small' => 'Small Vertical Paddings',
                    'section-horizontal-paddings-small' => 'Small Horizontal Paddings'
                ]
            ],
            'block-variations' => [
                'Title Variations' => [
                    'title1' => 'Title 1',
                    'title2' => 'Title 2',
                    'title-gradient' => 'Title Gradient',
                    'title-outline' => 'Title Outline'
                ],
                'Box Variations' => [
                    'box1' => 'Box 1',
                    'box2' => 'Box 2',
                    'box-gradient' => 'Box Gradient',
                    'box-outline' => 'Box Outline'
                ],
                'Effects' => [
                    'spaced' => 'Spaced',
                    'shadow' => 'Shadow',
                    'rounded' => 'Rounded',
                    'line-bottom' => 'Line bottom',
                    'line-top' => 'Line top',
                    'line-left' => 'Line left',
                    'line-right' => 'Line right'
                ],
                'Utility' => [
                    'center' => 'Center',
                    'title-center' => 'Centered Title',
                    'headings-center' => 'Centered Headings',
                    'equal-height' => 'Equal Height',
                    'disabled' => 'Disabled',
                    'align-right' => 'Align Right',
                    'align-left' => 'Align Left',
                    'nomarginall' => 'No Margin',
                    'nopaddingall' => 'No Padding',
                    'no-padding-horizontal' => 'No Padding Horizontal',
                    'no-padding-vertical' => 'No Padding Vertical',
                    'no-margin-horizontal' => 'No Margin Horizontal',
                    'no-margin-vertical' => 'No Margin Vertical',
                    'nomargintop' => 'No Margin Top',
                    'nomarginbottom' => 'No Margin Bottom',
                    'nomarginleft' => 'No Margin Left',
                    'nomarginright' => 'No Margin Right',
                    'nopaddingtop' => 'No Padding Top',
                    'nopaddingbottom' => 'No Padding Bottom',
                    'nopaddingleft' => 'No Padding Left',
                    'nopaddingright' => 'No Padding Right',
                    'hidden' => 'Hidden'
                ],
                'Distance' => [
                    'margin-top-10' => 'margin top 10',
                    'margin-top-20' => 'margin top 20',
                    'margin-top-30' => 'margin top 30',
                    'margin-top-40' => 'margin top 40',
                    'margin-top-50' => 'margin top 50'
                ]
            ]
        ],
        'admin' => [
            'styles' => [
                'core' => [
                    0 => 'base',
                    1 => 'accent',
                    2 => 'font'
                ],
                'section' => [
                    0 => 'zenith',
                    1 => 'navtop',
                    2 => 'navigation',
                    3 => 'header',
                    4 => 'intro',
                    5 => 'features',
                    6 => 'utility',
                    7 => 'above',
                    8 => 'testimonials',
                    9 => 'expanded',
                    10 => 'aside',
                    11 => 'main',
                    12 => 'sidebar',
                    13 => 'mainbottom',
                    14 => 'footertop',
                    15 => 'footer',
                    16 => 'footerbottom',
                    17 => 'nadir',
                    18 => 'offcanvas'
                ],
                'configuration' => [
                    0 => 'breakpoints'
                ]
            ]
        ]
    ]
];
