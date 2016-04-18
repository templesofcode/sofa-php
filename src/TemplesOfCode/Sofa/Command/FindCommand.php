<?php

namespace TemplesOfCode\Sofa\Command;

use TemplesOfCode\Sofa\Exception\CommandNotFoundException;

/**
 * Class FindCommand
 * @package TemplesOfCode\Sofa\Command
 */
class FindCommand extends ShellCommand
{
    private static $targetCommand = 'find';

    /**
     * FindCommand constructor.
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