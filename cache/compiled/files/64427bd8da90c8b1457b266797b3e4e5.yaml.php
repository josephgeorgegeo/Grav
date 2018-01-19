<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp/www/Grav/user/plugins/frontend-edit-button/blueprints.yaml',
    'modified' => 1515869381,
    'data' => [
        'name' => 'Frontend Edit Button',
        'version' => '1.0.4',
        'description' => 'Adds an \'edit this page\' on the frontend when logged in as administrator',
        'icon' => 'newspaper-o',
        'author' => [
            'name' => 'Johan van de Merwe',
            'email' => 'j.vd.merwe@enovision.net',
            'url' => 'https://github.com/enovision'
        ],
        'homepage' => 'https://github.com/enovision/grav-frontend-edit-button',
        'keywords' => 'grav, plugin, frontend',
        'bugs' => 'https://github.com/enovision/grav-frontend-edit-button/issues',
        'docs' => 'https://github.com/enovision/grav-frontend-edit-button/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'position' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_FRONTEND_EDIT_BUTTON.POSITION_LABEL',
                    'help' => 'PLUGIN_FRONTEND_EDIT_BUTTON.POSITION_LABEL_HELP',
                    'size' => 'medium',
                    'highlight' => 'tr',
                    'options' => [
                        'tl' => 'PLUGIN_FRONTEND_EDIT_BUTTON.TOP_LEFT',
                        'tr' => 'PLUGIN_FRONTEND_EDIT_BUTTON.TOP_RIGHT',
                        'bl' => 'PLUGIN_FRONTEND_EDIT_BUTTON.BOTTOM_LEFT',
                        'br' => 'PLUGIN_FRONTEND_EDIT_BUTTON.BOTTOM_RIGHT'
                    ]
                ],
                'showLabel' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_FRONTEND_EDIT_BUTTON.SHOW_LABEL',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'showIcon' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_FRONTEND_EDIT_BUTTON.SHOW_ICON',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
