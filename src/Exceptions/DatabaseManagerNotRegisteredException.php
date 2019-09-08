<?php

declare(strict_types=1);

namespace Stancl\Tenancy\Exceptions;

class DatabaseManagerNotRegisteredException extends \Exception
{
    public function __construct($driver)
    {
        $this->message = "Database manager for driver $driver is not registered.";
    }
}
