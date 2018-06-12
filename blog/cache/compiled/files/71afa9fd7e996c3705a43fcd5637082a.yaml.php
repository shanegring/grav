<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/shanegring/GitHub/blog/user/plugins/users-page-ownership/blueprints/admin/pages/new_folder.yaml',
    'modified' => 1525981108,
    'data' => [
        '@extends' => [
            'type' => 'admin/pages/new_folder',
            'context' => 'blueprints://'
        ],
        'form' => [
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
];
