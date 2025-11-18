<?php

declare(strict_types=1);

// mostrar erros enquanto depura (remova em produção)
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// carrega config (CONTROLLER_PATH deve ser definido em config.php)
require_once dirname(__FILE__, 2) . '/src/config/config.php';

$raw = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?: '/';
$uri = urldecode($raw);
$uri = preg_replace('#/+#', '/', $uri);

if ($uri === '/' || $uri === '' || $uri === '/index.php') {
    $requested = 'day_records.php';
} else {
    $parts = explode('/', trim($uri, '/'));
    $projectFolderNames = ['innout', 'public'];
    while (!empty($parts) && in_array($parts[0], $projectFolderNames, true)) {
        array_shift($parts);
    }
    $requested = empty($parts) ? 'day_records.php' : basename($parts[0]);
}

$controllerFile = rtrim(CONTROLLER_PATH, "/\\") . DIRECTORY_SEPARATOR . $requested;
$realController = realpath($controllerFile);
$realControllerPath = realpath(rtrim(CONTROLLER_PATH, "/\\"));

if ($realController === false || strpos($realController, $realControllerPath) !== 0 || !is_file($realController)) {
    http_response_code(404);
    echo "Arquivo não encontrado: " . htmlspecialchars($requested);
    exit;
}

require_once $realController;
