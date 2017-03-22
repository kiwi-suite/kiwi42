<?php
namespace Application;

use Core42\ModuleManager\Feature\CliConfigProviderInterface;
use Core42\ModuleManager\GetConfigTrait;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\Stdlib\ArrayUtils;
use Zend\Stdlib\Glob;

class Module implements ConfigProviderInterface, CliConfigProviderInterface
{
    use GetConfigTrait;

    /**
     * @return mixed
     */
    public function getCliConfig()
    {
        $config = [];
        $configPath = dirname((new \ReflectionClass($this))->getFileName()) . '/../config/cli/*.config.php';

        $entries = Glob::glob($configPath);
        foreach ($entries as $file) {
            $config = ArrayUtils::merge($config, include_once $file);
        }

        return $config;
    }
}
