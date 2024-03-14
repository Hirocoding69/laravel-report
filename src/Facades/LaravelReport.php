<?php

namespace TengSambo\LaravelReport\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TengSambo\LaravelReport\LaravelReport
 */
class LaravelReport extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \TengSambo\LaravelReport\LaravelReport::class;
    }
}
