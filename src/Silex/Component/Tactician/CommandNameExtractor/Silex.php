<?php

namespace Silex\Component\Tactician\CommandNameExtractor;

use League\Tactician\Handler\CommandNameExtractor\CommandNameExtractor;

/**
 * Class Silex
 * @package Silex\Component\Tactician\CommandNameExtractor
 */
class Silex implements CommandNameExtractor
{
    /**
     * @param object $command
     * @return string
     * @throws \InvalidArgumentException
     */
    public function extract($command): string
    {
        if (! is_object($command)) {
            throw new \InvalidArgumentException('Command must be an object');
        }

        return get_class($command);
    }
}
