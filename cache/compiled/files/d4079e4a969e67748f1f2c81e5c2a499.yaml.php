<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/shanegring/GitHub/r00t/user/config/plugins/git-sync.yaml',
    'modified' => 1519226443,
    'data' => [
        'enabled' => true,
        'text_var' => 'Custom Text added by the **Git Sync** plugin (disable plugin to remove)',
        'folders' => [
            0 => 'pages'
        ],
        'repository' => 'https://github.com/shanegring/r00t.git',
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
        'logging' => true
    ]
];
