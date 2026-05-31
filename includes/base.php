<?php
/**
 * Shared URL base for assets and internal links.
 *
 * Azure App Service serves this app from the domain root by default. If you
 * intentionally deploy under a subfolder, set APP_BASE_PATH=/that-folder in
 * App Service application settings.
 */
$base = rtrim(getenv('APP_BASE_PATH') ?: '', '/');

if (!function_exists('neko_page_url')) {
    function neko_page_url(string $page): string
    {
        global $base;

        return ($base ?: '') . '/?page=' . rawurlencode($page);
    }
}
