<?php

namespace TemplesOfCode\Sofa\Command;

use AFM\Rsync\Command as BaseCommand;
use TemplesOfCode\Sofa\Exception\CommandNotFoundException;

/**
 * Class ShellCommand
 * @package TemplesOfCode\Sofa\Command
 */
class ShellCommand extends BaseCommand implements ChainableCommand
{
    /**
     * @param $targetCommand
     * @return null|string
     * @throws CommandNotFoundException
     */
    protected function resolveExecutable($targetCommand)
    {
        /**
         * @var string $locateCommand
         */
        $locateCommand = "which " . $targetCommand;

        /**
         * todo: run $locateCommand through escapeshellarg()
         */
        
        $output = array();

        /**
         * @ar int $exitStatus
         */
        $exitStatus = null;

        exec($locateCommand, $output, $exitStatus);

        /**
         * @var string $executable
         */
        $executable = $output[0];

        $noResolution = $exitStatus
            || empty($executable)
        ;

        if ($noResolution) {
            throw new CommandNotFoundException(sprintf(
                "No '%s' command found in system",
                $targetCommand
            ));
        }


        return $executable;
    }

    /**
     * @param bool $showOutput
     * @return array
     */
    public function execute($showOutput = false)
    {
        $script = $this->getCommand();

        /**
         * Scope in placeholder variables for execution.
         */

        /**
         * @var [] $output
         */
        $output = [];

        /**
         * @var int $exitStatus
         */
        $exitStatus = null;

        exec($script, $output, $exitStatus);

        $returnedResources = [$exitStatus];
        if ($showOutput) {
            $returnedResources[] = $output;
        }

        return $returnedResources;
    }

}