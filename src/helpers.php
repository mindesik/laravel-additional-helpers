<?php

use MisterPaladin\LaravelAdditionalHelpers\Helper;

if (!function_exists('path_unique')) {
    
    function path_unique($path, $suffixLength = 3) {
        return Helper::path_unique($path, $suffixLength);
    }
}
