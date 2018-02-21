<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/shanegring/GitHub/r00t/user/themes/learn2-git-sync/blueprints.yaml',
    'modified' => 1518620056,
    'data' => [
        'name' => 'Learn2 Git Sync',
        'version' => '0.9.83',
        'description' => 'A customized version of the Learn2 theme for use with the Learn2 with Git Sync skeleton package.',
        'icon' => 'git',
        'author' => [
            'name' => 'Paul Hibbitts',
            'email' => 'paul@hibbittsdesign.org',
            'url' => 'http://hibbittsdesign.org'
        ],
        'homepage' => 'https://github.com/hibbitts-design/grav-theme-learn2-git-sync',
        'demo' => 'http://demo.hibbittsdesign.org/grav-learn2-git-sync/',
        'keywords' => 'learn2, gitsync',
        'bugs' => 'https://github.com/hibbitts-design/grav-theme-learn2-git-sync/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'admin',
            1 => 'learn2',
            2 => 'external_links',
            3 => 'feed',
            4 => 'git-sync',
            5 => 'highlight',
            6 => 'youtube'
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'top_level_version' => [
                    'type' => 'toggle',
                    'label' => 'Top Level Version',
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
                'home_url' => [
                    'type' => 'text',
                    'label' => 'Home URL',
                    'placeholder' => 'http://getgrav.org',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'google_analytics_code' => [
                    'type' => 'text',
                    'label' => 'Google Analytics Code',
                    'placeholder' => 'UA-XXXXXXXX-X',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'github.position' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'label' => 'Git Link Position',
                    'options' => [
                        'top' => 'Top',
                        'bottom' => 'Bottom',
                        'off' => 'Off'
                    ]
                ],
                'github.icon' => [
                    'type' => 'input.text',
                    'size' => 'small',
                    'label' => 'Custom Git Link Font Awesome Icon',
                    'description' => 'Icon short name.',
                    'help' => 'Enter the short name of the Font Awesome icon for the link, for example \'gitlab\'.',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'github.tree' => [
                    'type' => 'text',
                    'label' => 'Custom Git Repository Tree URL',
                    'help' => 'Enter the URL that leads to the pages folder of your Git Repository.',
                    'description' => 'URL path to the pages folder, but with \'/pages\' and everything following it removed. For example, \'https://github.com/paulhibbitts/demo-grav-learn2-with-git-sync/tree/master\'.'
                ]
            ]
        ]
    ]
];
