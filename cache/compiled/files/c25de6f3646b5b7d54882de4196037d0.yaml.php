<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp/www/Grav/user/plugins/editable-simplemde/blueprints.yaml',
    'modified' => 1515868610,
    'data' => [
        'name' => 'Editable With SimpleMDE',
        'version' => '0.1.0',
        'testing' => false,
        'description' => 'Edit page content in the frontend using the SimpleMDE markdown editor',
        'icon' => 'edit',
        'author' => [
            'name' => 'Ron Wardenier',
            'email' => 'bleutzinn@festeto.com'
        ],
        'homepage' => 'https://github.com/bleutzinn/grav-plugin-editable-simplemde',
        'demo' => NULL,
        'keywords' => 'plugin, editor, wysiwyg, markdown, editing, editable, front-end',
        'bugs' => 'https://github.com/bleutzinn/grav-plugin-editable-simplemde/issues',
        'docs' => 'https://github.com/bleutzinn/grav-plugin-editable-simplemde/blob/master/README.md',
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
                ]
            ]
        ]
    ]
];
