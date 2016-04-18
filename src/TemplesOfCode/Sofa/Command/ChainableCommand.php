<?php
namespace TemplesOfCode\Sofa\Command;

/**
 * Interface ChainableCommand
 * @package TemplesOfCode\Sofa\Command
 */
interface ChainableCommand
{
    /**
     * @return string
     */
    public function getCommand();

    /**
     * @return mixed
     */
    public function execute();
}