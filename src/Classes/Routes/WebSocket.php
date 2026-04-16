<?php 

declare(strict_types = 1);

namespace Dispatcher\Classes\Routes;

class WebSocket extends Http implements \Dispatcher\Interfaces\Route
{
    public function execute() : void
    {
        throw new \Dispatcher\Classes\Exceptions\MethodCallNotAllowed();
    }
}

