<?php
namespace Application\Command;

use Core42\Command\AbstractCommand;
use Core42\Command\CommandInterface;
use Core42\Command\ConsoleAwareTrait;
use ZF\Console\Route;

class ExampleCommand extends AbstractCommand
{
    use ConsoleAwareTrait;

    /**
     * @param bool $dryRun
     * @return CommandInterface
     */
    public function setDryRun($dryRun)
    {
        // TODO: Implement setDryRun() method.
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        // TODO: Implement getErrors() method.
    }

    /**
     * @return bool
     */
    public function hasErrors()
    {
        // TODO: Implement hasErrors() method.
    }

    /**
     * @param array $values
     */
    public function hydrate(array $values)
    {
        $this->consoleOutput('Hydrate');
        foreach ($values as $param => $value) {
            $this->consoleOutput('  '.$param.' => '.$value);
        }
    }

    /**
     * @param Route $route
     * @return void
     */
    public function consoleSetup(Route $route)
    {
        $this->hydrate(
            [
                'foo'                    => $route->getMatchedParam('foo'),
                'optionalFooWithDefault' => $route->getMatchedParam('optionalFooWithDefault'),
            ]
        );
    }

    /**
     * @return mixed
     */
    protected function execute()
    {
        $this->consoleOutput('Example ran successfully.');
    }
}
