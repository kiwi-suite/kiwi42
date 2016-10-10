<?php
namespace Application;

use Core42\ModuleManager\GetConfigTrait;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface
{
    use GetConfigTrait;
}
