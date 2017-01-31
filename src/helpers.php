<?php

if (!function_exists('path_unique')) {
    /**
     * Generate unique filename for given path
     * @param  string  $path   [File path]
     * @param  integer $suffixLength [Suffix length]
     * @return string
     */
    function path_unique($path, $suffixLength = 3) {
        $unique = _generate_unique($path, $suffixLength);
        
        while (\File::exists($unique)) {
            $unique = _generate_unique($path, $suffixLength);
        }
        
        return $unique;
    }
}

/**
 * Private functions
 */

if (!function_exists('_generate_unique')) {
    function _generate_unique($path, $suffixLength) {
        $name = pathinfo($path, PATHINFO_FILENAME);
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        return storage_path(sprintf('app/%s_%s.%s', $name, str_random($suffixLength), $ext));
    }
}