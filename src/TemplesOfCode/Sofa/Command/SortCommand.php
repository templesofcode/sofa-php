<?php

namespace TemplesOfCode\Sofa\Command;

/**
 * Class SedCommand
 * @package TemplesOfCode\Sofa\Command
 */
class SortCommand extends ShellCommand
{
    private static $targetCommand = 'sort';

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