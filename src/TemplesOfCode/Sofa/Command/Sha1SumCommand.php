<?php

namespace TemplesOfCode\Sofa\Command;

/**
 * Class Sha1SumCommand
 * @package TemplesOfCode\Sofa\Command
 */
class Sha1SumCommand extends ShellCommand
{
    private static $targetCommand = 'sha1sum';

    /**
     * Sha1SumCommand constructor.
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