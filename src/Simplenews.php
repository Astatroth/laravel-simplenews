<?php

namespace Astatroth\LaravelSimplenews;

use Illuminate\Support\Facades\Facade;

class Simplenews extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'simplenews';
    }
}