<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/shanegring/GitHub/r00t-documentation/user/config/plugins/git-sync.yaml',
    'modified' => 1519143172,
    'data' => [
        'enabled' => true,
        'text_var' => 'Custom Text added by the **Git Sync** plugin (disable plugin to remove)',
        'folders' => [
            0 => 'pages'
        ],
        'repository' => 'https://www.github.com/shanegring/r00t-directory',
        'user' => 'shane.gring@gmail.com',
        'password' => 'Qweasd123',
        'webhook' => '/_git-sync',
        'branch' => 'master',
        'remote' => [
            'name' => 'origin',
            'branch' => 'master'
        ],
        'git' => [
            'author' => 'gituser',
            'name' => 'GitSync',
            'email' => 'git-sync@trilby.media',
            'bin' => 'git'
        ],
        'logging' => false
    ]
];
