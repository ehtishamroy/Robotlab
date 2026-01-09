<?php

use App\Models\Setting;
use Illuminate\Support\Str;

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

if (!function_exists('normalize_image_url')) {
    /**
     * Normalize image URL - handles both full URLs and relative paths.
     * Prevents double-prefixing issues when URL is already absolute.
     *
     * @param string|null $url
     * @param string|null $default Default path if URL is empty
     * @return string|null
     */
    function normalize_image_url($url, $default = null)
    {
        if (!$url) {
            return $default ? asset($default) : null;
        }

        // If it's already a full URL, extract the path and rebuild with current domain
        if (Str::startsWith($url, ['http://', 'https://'])) {
            $path = parse_url($url, PHP_URL_PATH);
            return $path ? url($path) : ($default ? asset($default) : null);
        }

        // For relative paths, use asset() normally
        return asset($url);
    }
}
