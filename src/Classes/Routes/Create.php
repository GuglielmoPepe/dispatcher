<?php 

declare(strict_types = 1);

namespace Dispatcher\Classes\Routes;

class Create implements \Dispatcher\Interfaces\Route
{
    public function connect() : void
    {
        throw new \Dispatcher\Classes\Exceptions\MethodCallNotAllowed();
    }
    public function delete() : void
    {
        throw new \Dispatcher\Classes\Exceptions\MethodCallNotAllowed();
    }
    public function get() : void
    {
        throw new \Dispatcher\Classes\Exceptions\MethodCallNotAllowed();
    }
    public function head() : void
    {
        throw new \Dispatcher\Classes\Exceptions\MethodCallNotAllowed();
    }
    public function options() : void
    {
        throw new \Dispatcher\Classes\Exceptions\MethodCallNotAllowed();
    }
    public function patch() : void
    {
        throw new \Dispatcher\Classes\Exceptions\MethodCallNotAllowed();
    }
    public function post() : void
    {
        throw new \Dispatcher\Classes\Exceptions\MethodCallNotAllowed();
    }
    public function put() : void
    {
        throw new \Dispatcher\Classes\Exceptions\MethodCallNotAllowed();
    }
    public function trace() : void
    {
        throw new \Dispatcher\Classes\Exceptions\MethodCallNotAllowed();
    }
}

