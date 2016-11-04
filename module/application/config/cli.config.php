<?php
namespace Application;

use Application\Command\ExampleCommand;

return [
    'cli' => [
        'example' => [
            'group'                => 'application',
            'route'                => 'example --foo=  [--optionalFooWithDefault=]',
            'command-name'         => ExampleCommand::class,
            'short_description'    => 'Example Command',
            'description'          => 'Elaborating here a bit on how to use this command',
            'defaults'             => [
                'optionalFooWithDefault' => 'bar',
            ],
            'options_descriptions' => [
                '--foo'                    => 'required parameter',
                '--optionalFooWithDefault' => 'optional parameter, default is "bar"',
            ],
        ],
    ],
];
