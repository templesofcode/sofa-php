<?php

namespace TemplesOfCode\Sofa\Command;

/**
 * Class SedCommand
 * @package TemplesOfCode\Sofa\Command
 */
class SedCommand extends ShellCommand
{
    /**
     * @var string
     */
    private static $targetCommand = 'sed';

    /**
     * SedCommand constructor.
     * @param string|null $executable
     */
    public function __construct($executable = null)
    {
        if (empty($executable)) {
            $executable = $this->resolveExecutable(self::$targetCommand);
        }

        parent::__construct($executable);
    }
}