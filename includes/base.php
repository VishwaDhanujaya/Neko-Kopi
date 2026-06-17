<?php
/**
 * Shared URL base for assets and internal links.
 *
 * Azure App Service serves this app from the domain root by default. If you
 * intentionally deploy under a subfolder, set APP_BASE_PATH=/that-folder in
 * App Service application settings.
 */
$base = rtrim(getenv('APP_BASE_PATH') ?: (isset($_SERVER['APP_BASE_PATH']) ? $_SERVER['APP_BASE_PATH'] : '/Neko-Kopi'), '/');

if (!function_exists('neko_page_url')) {
    function neko_page_url(string $page): string
    {
        global $base;

        return ($base ?: '') . '/' . rawurlencode($page);
    }
}

if (!function_exists('neko_image_url')) {
    function neko_image_url(string $filename, string $placeholderText = '', int $w = 800, int $h = 600): string
    {
        global $base;
        $localPath = __DIR__ . '/../assets/images/' . $filename;
        if (file_exists($localPath)) {
            return ($base ?: '') . '/assets/images/' . $filename;
        }
        
        $textParam = $placeholderText ? '?text=' . urlencode($placeholderText) : '';
        return "https://placehold.co/{$w}x{$h}/eeeeee/aaaaaa" . $textParam;
    }
}
?>
