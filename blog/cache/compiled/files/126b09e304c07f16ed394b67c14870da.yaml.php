<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/shanegring/GitHub/blog/user/plugins/users-page-ownership/blueprints/user/group.yaml',
    'modified' => 1525981108,
    'data' => [
        '@extends' => [
            'type' => 'group',
            'context' => 'blueprints://user'
        ],
        'form' => [
            'fields' => [
                'pageusefake' => [
                    'ordering@' => 'access',
                    'type' => 'select',
                    'multiple' => true,
                    'size' => 'large',
                    'label' => 'PLUGIN_USERSOWNERSHIP.PAGES_ALLOWED',
                    'data-options@' => '\\Grav\\Plugin\\AdminPlugin::pagesTypes',
                    'classes' => 'fancy fakepageuse',
                    'validate' => [
                        'type' => 'array'
                    ]
                ],
                'pageuse' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'AllowedPageTypesReal',
                    'classes' => 'fancy realpageuse'
                ]
            ]
        ]
    ]
];
