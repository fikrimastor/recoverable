<?php

namespace FikriMastor\Recoverable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \FikriMastor\Recoverable\Recoverable
 */
class Recoverable extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \FikriMastor\Recoverable\Recoverable::class;
    }
}
