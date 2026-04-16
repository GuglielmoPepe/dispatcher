<?php

declare(strict_types = 1);

namespace Dispatcher\Interfaces\Routes;

interface Cli extends \Dispatcher\Interfaces\Route
{
    public function execute() : void;
}

