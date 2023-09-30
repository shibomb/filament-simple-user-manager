<?php

namespace Shibomb\FilamentSimpleUserManager\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Shibomb\FilamentSimpleUserManager\FilamentSimpleUserManager
 */
class FilamentSimpleUserManager extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Shibomb\FilamentSimpleUserManager\FilamentSimpleUserManager::class;
    }
}
