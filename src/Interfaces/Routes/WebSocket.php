<?php

declare(strict_types = 1);

namespace Dispatcher\Interfaces\Routes;

interface WebSocket extends \Dispatcher\Interfaces\Route
{
    public function execute() : void;
}

