<?php

namespace TemplesOfCode\Sofa\Command;

/**
 * Class CdCommand
 * @package TemplesOfCode\Sofa\Command
 */
class CdCommand extends ShellCommand
{
    /**
     * @var string
     */
    private static $targetCommand = 'cd';

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