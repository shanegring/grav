<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/shanegring/GitHub/blog/user/plugins/users-page-ownership/blueprints/admin/pages/move.yaml',
    'modified' => 1525981108,
    'data' => [
        '@extends' => [
            'type' => 'admin/pages/move',
            'context' => 'blueprints://'
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'route' => [
                    'type' => 'filteredparent',
                    'label' => 'PLUGIN_ADMIN.PARENT',
                    'classes' => 'fancy'
                ]
            ]
        ]
    ]
];
