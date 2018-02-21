<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/shanegring/GitHub/r00t-documentation/user/themes/learn2-git-sync/blueprints/docs.yaml',
    'modified' => 1518620056,
    'data' => [
        'title' => 'Docs',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'fields' => [
                                'content' => [
                                    'markdown' => true,
                                    'default' => 'Your page content goes here.'
                                ]
                            ]
                        ],
                        'advanced' => [
                            'fields' => [
                                'overrides' => [
                                    'fields' => [
                                        'header.visible' => [
                                            'default' => 1
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
