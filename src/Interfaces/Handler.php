<?php

declare(strict_types = 1);

namespace Dispatcher\Interfaces;

interface Handler
{
    public function connect(Handler $handler) : void;
    public function handle(array $input) : Route;
}

