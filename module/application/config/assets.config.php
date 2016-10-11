<?php
namespace Application;

return [
    'assets' => [
        'directories' => [
            'application' => [
                'target'    => 'public/assets/application',
                'source'    => 'module/application/assets/dist/',
                'base_url'  => '/assets/application',
            ],
        ],

    ],
];
