<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/sotiris/Downloads/default_site_backup--20250926220607/system/blueprints/flex/configure/compat.yaml',
    'modified' => 1730104286,
    'size' => 428,
    'data' => [
        'form' => [
            'compatibility' => [
                'type' => 'tab',
                'title' => 'Compatibility',
                'fields' => [
                    'object.compat.events' => [
                        'type' => 'toggle',
                        'toggleable' => true,
                        'label' => 'Admin event compatibility',
                        'help' => 'Enables onAdminSave and onAdminAfterSave events for plugins',
                        'highlight' => 1,
                        'default' => 1,
                        'options' => [
                            1 => 'PLUGIN_ADMIN.ENABLED',
                            0 => 'PLUGIN_ADMIN.DISABLED'
                        ],
                        'validate' => [
                            'type' => 'bool'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
