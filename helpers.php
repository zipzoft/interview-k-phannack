<?php

if (!function_exists('base_path')) {
    /**
     * Get the path to the base of the install.
     *
     * @param  string  $path
     * @return string
     */
    function base_path($path = '')
    {
        // Trim left and right slashes
        $basePath = rtrim(getcwd(), '/');

        // If the path is not empty, append it to the base path
        if (!empty($path)) {
            $basePath .= '/' . ltrim($path, '/');
        }

        return $basePath;
    }
}


if (!function_exists('storage_path')) {
    /**
     * Get the path to the storage folder.
     *
     * @param  string  $path
     * @return string
     */
    function storage_path($path = '')
    {
        return base_path('storage/' . $path);
    }
}
