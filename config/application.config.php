<?php
/**
 * kiwi42
 *
 * @package kiwi42
 * @link https://github.com/raum42/kiwi42
 * @copyright Copyright (c) 2010 - 2016 raum42 (https://www.raum42.at)
 * @license MIT License
 * @author raum42 <kiwi@raum42.at>
 *
 */

return [
    'modules' => require __DIR__ . '/modules.config.php',
    'module_listener_options' => [
        'module_paths' => [],
        'config_glob_paths' => [
            realpath(__DIR__) . '/autoload/{global{*},local{*}}.config.php',
        ],
        'config_cache_enabled' => true,
        'config_cache_key' => 'application.config.cache',
        'module_map_cache_enabled' => false,
        'module_map_cache_key' => 'application.module.cache',
        'cache_dir' => 'data/cache/config/',
        'check_dependencies' => true,
    ],
    'service_manager' => [
        'factories' => [
            \Core42\Mvc\Environment\Environment::class => \Core42\Mvc\Environment\Service\EnvironmentFactory::class,
            'Request'   => \Zend\Mvc\Service\RequestFactory::class
        ],
    ]
];
