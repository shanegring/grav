<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/shanegring/GitHub/blog/user/plugins/users-page-ownership/blueprints/admin/pages/modular_new.yaml',
    'modified' => 1525981108,
    'data' => [
        '@extends' => [
            'type' => 'admin/pages/modular_new',
            'context' => 'blueprints://'
        ],
        'form' => [
            'fields' => [
                'route' => [
                    'type' => 'filteredparent',
                    'label' => 'PLUGIN_ADMIN.PARENT_PAGE',
                    'classes' => 'fancy',
                    'validate' => [
                        'required' => true
                    ]
                ]
            ]
        ]
    ]
];
