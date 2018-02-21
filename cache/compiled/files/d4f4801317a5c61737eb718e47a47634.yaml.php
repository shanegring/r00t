<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/shanegring/GitHub/r00t/user/blueprints/admin/pages/new_chapter.yaml',
    'modified' => 1518619846,
    'data' => [
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'section' => [
                    'type' => 'section',
                    'title' => 'Add Chapter'
                ],
                'title' => [
                    'type' => 'text',
                    'label' => 'Chapter Title',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'folder' => [
                    'type' => 'hidden',
                    'default' => '@slugify-title'
                ],
                'route' => [
                    'type' => 'hidden',
                    'default' => '/'
                ],
                'name' => [
                    'type' => 'hidden',
                    'default' => 'chapter'
                ],
                'visible' => [
                    'type' => 'hidden',
                    'default' => ''
                ],
                'blueprint' => [
                    'type' => 'blueprint'
                ]
            ]
        ]
    ]
];
