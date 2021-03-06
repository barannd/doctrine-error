<?php

return [
    'display_not_found_reason' => true,
    'display_exceptions' => true,
    'doctype' => 'HTML5',
    'not_found_template' => 'error/404',
    'exception_template' => 'error/index',
    'template_map' => array(
        'error/403' => __DIR__ . '/../view/error/403.phtml',
        'error/404' => __DIR__ . '/../view/error/404.phtml',
        'error/index' => __DIR__ . '/../view/error/index.phtml',
        'layout/default' => __DIR__ . '/../view/layout/default.phtml',
    ),
    'template_path_stack' => [
        __DIR__ . '/../view'
    ],
    'layout' => 'layout/default'
];