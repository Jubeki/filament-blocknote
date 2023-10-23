<?php

namespace Jubeki\FilamentBlocknote\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jubeki\FilamentBlocknote\FilamentBlocknote
 */
class FilamentBlocknote extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Jubeki\FilamentBlocknote\FilamentBlocknote::class;
    }
}
