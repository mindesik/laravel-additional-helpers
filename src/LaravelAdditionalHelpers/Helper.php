<?php

namespace MisterPaladin\LaravelAdditionalHelpers;

use File;

class Helper {
    
    /**
     * Generate unique filename for given path
     * @param  string  $path   [File path]
     * @param  integer $suffixLength [Suffix length]
     * @return string
     */
    public static function path_unique($path, $suffixLength = 3) {
        $unique = self::generate_unique($path, $suffixLength);
        
        while (\File::exists($unique)) {
            $unique = self::generate_unique($path, $suffixLength);
        }
        
        return $unique;
    }
    
    private static function generate_unique($path, $suffixLength) {
        $name = pathinfo($path, PATHINFO_FILENAME);
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        return storage_path(sprintf('app/%s_%s.%s', $name, str_random($suffixLength), $ext));
    }
}