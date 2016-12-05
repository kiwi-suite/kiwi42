<?php
namespace Application;

return [
    'view_manager' => [
        'not_found_template'        => 'error/404',
        'template_map'              => [
            'layout/layout'       => __DIR__ . '/../view/layout/layout.phtml',
        ],
        'template_path_stack'       => [
            __NAMESPACE__               => __DIR__ . '/../view',
        ],
    ],
];
