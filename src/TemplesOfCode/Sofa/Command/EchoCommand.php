<?php

namespace TemplesOfCode\Sofa\Command;

/**
 * Class EchoCommand
 * @package TemplesOfCode\Sofa\Command
 */
class EchoCommand extends ShellCommand
{
    /**
     * @var string
     */
    private static $targetCommand = 'echo';

    /**
     * CdCommand constructor.
     * @param string|null $executable
     */
    public function __construct($executable = null)
    {
        if (empty($executable)) {
            $executable = self::$targetCommand;
        }

        parent::__construct($executable);
    }
}
