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
use Core42\Mvc\Environment\Environment;
use Zend\Http\PhpEnvironment\Request;

Environment::register(function(Environment $environment){
    if (!($environment->getRequest() instanceof Request)) {
        return;
    }

    if (!class_exists(\Admin42\Module::class)) {
        return;
    }
    $request = $environment->getRequest();
    $path = str_replace($request->getBasePath(), "", $request->getRequestUri());
    if (strlen($path) > 6 && substr($path, 0, 6) == '/admin') {
        $environment->set(\Admin42\Module::ENVIRONMENT_ADMIN);
    }
});

Environment::register(function(Environment $environment){
    if (php_sapi_name() != 'cli') {
        return;
    }

    if (class_exists(\Admin42\Module::class)) {
        $environment->set(\Admin42\Module::ENVIRONMENT_ADMIN);
    }

    $environment->set(\Core42\Module::ENVIRONMENT_CLI);
});

Environment::register(function(Environment $environment){
    if (DEVELOPMENT_MODE !== true) {
        return;
    }

    $environment->set(\Core42\Module::ENVIRONMENT_DEVELOPMENT);
});

