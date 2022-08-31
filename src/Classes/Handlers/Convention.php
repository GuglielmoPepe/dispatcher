<?php 

declare(strict_types = 1);

namespace Dispatcher\Classes\Handlers;

class Convention implements \Dispatcher\Interfaces\Handler 
{
    private $successor;

    public function __construct() 
    {
        $this->successor = NULL;
    }

    final public function connect(\Dispatcher\Interfaces\Handler $successor) : void 
    {
        if ($this->successor === NULL) 
        {
            $this->successor = $successor;
        } 
        else 
        {
            $this->successor->connect($successor);
        }

        return;
    }

    final public function handle(array $input) : \Dispatcher\Interfaces\Route
    {
        $route = '\Dispatcher\Classes\Routes\\' . isset($input['route']) ? ucfirst($input['route']) : 'Home';

        if (class_exists($route)) 
        {
            return new $route();
        }

        if ($this->successor !== NULL) 
        {
            return $this->successor->handle($input);
        }

        throw new \Dispatcher\Classes\Exceptions\HandlerClassNotFound();
    }
}

