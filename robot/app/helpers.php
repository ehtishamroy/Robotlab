<?php

use App\Models\Setting;

if (!function_exists('setting')) {
    /**
     * Get setting value by key.
     * Returns default if setting doesn't exist, is null, or is empty.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    function setting($key, $default = null)
    {
        $value = Setting::getByKey($key, null);

        // Return default if value is null, empty string, or empty array
        if ($value === null || $value === '' || $value === '[]') {
            return $default;
        }

        return $value;
    }
}
