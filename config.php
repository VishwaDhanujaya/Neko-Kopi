<?php
/**
 * config.php — Configuration
 * Reads from Azure App Settings (env vars) with local fallbacks.
 */

return [
    'smtp_host'   => getenv('SMTP_HOST') ?: 'smtp.gmail.com',
    'smtp_user'   => getenv('SMTP_USER') ?: '',
    'smtp_pass'   => getenv('SMTP_PASS') ?: '',
    'smtp_port'   => (int)(getenv('SMTP_PORT') ?: 587),
    'smtp_secure' => getenv('SMTP_SECURE') ?: 'tls',
    'recipient'   => getenv('RECIPIENT') ?: '',
];
