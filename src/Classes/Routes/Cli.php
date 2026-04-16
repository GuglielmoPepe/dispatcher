<?php 

declare(strict_types = 1);

namespace Dispatcher\Classes\Routes;

class Cli implements \Dispatcher\Interfaces\Routes\Cli
{
    public function execute() : void
    {
        throw new \Dispatcher\Classes\Exceptions\MethodCallNotAllowed();
    }
}

