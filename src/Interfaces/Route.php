<?php

declare(strict_types = 1);

namespace Dispatcher\Interfaces;

interface Route
{
    public function connect() : void;
    public function delete() : void;
    public function get() : void;
    public function head() : void;
    public function options() : void;
    public function patch() : void;
    public function post() : void;
    public function put() : void;
    public function trace() : void;
}

