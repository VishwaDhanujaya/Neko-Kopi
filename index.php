<?php
// index.php — Azure-friendly front controller.
$allowedPages = ['home', 'menu', 'gallery', 'events', 'contact'];
$requestedPage = $_GET['page'] ?? 'home';

if (!in_array($requestedPage, $allowedPages, true)) {
    http_response_code(404);
    $requestedPage = 'home';
}

require __DIR__ . '/pages/' . $requestedPage . '.php';
?>
