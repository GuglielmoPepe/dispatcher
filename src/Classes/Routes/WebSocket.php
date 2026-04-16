<?php 

declare(strict_types = 1);

namespace Dispatcher\Classes\Routes;

class WebSocket implements \Dispatcher\Interfaces\Routes\WebSocket
{
    public function execute() : void
    {
        throw new \Dispatcher\Classes\Exceptions\MethodCallNotAllowed();
    }
}

