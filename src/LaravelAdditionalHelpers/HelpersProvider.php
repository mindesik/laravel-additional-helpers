<?php

namespace MisterPaladin\LaravelAdditionalHelpers;

use Illuminate\Support\ServiceProvider;

class HelpersProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }
    
    public function register()
    {
        require (__DIR__ . '/../helpers.php');
    }
}
