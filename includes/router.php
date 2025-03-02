<?php

declare(strict_types=1);

const ALLOW_METHODS = ['GET', 'POST'];
const INDEX_URI = '';
const INDEX_ROUNTE = 'login';

function normalizeUri(string $uri): string
{
    $uri = strtok($uri, '?');
    $uri = strtolower(trim($uri, '/'));
    return $uri == INDEX_URI ? INDEX_ROUNTE : $uri;
}

function notFound()
{
    http_response_code(404);
    echo "404 Not Found";
    exit;
}

function getFilePath(string $uri, string $method): string
{
    return ROUTE_DIR . '/' . normalizeUri($uri) . '_' . strtolower($method) . '.php';
}

function isStaticFile(string $uri): bool
{
    $extension = pathinfo($uri, PATHINFO_EXTENSION);
    $staticExtensions = ['css', 'js', 'jpg', 'jpeg', 'png', 'gif', 'svg', 'ico'];
    return in_array(strtolower($extension), $staticExtensions);
}

function serveStaticFile(string $uri): void
{
    $filePath = $_SERVER['DOCUMENT_ROOT'] . $uri;

    if (file_exists($filePath)) {
        $extension = pathinfo($filePath, PATHINFO_EXTENSION);

        switch (strtolower($extension)) {
            case 'css':
                header('Content-Type: text/css');
                break;
            case 'js':
                header('Content-Type: application/javascript');
                break;
            case 'jpg':
            case 'jpeg':
                header('Content-Type: image/jpeg');
                break;
            case 'png':
                header('Content-Type: image/png');
                break;
            case 'gif':
                header('Content-Type: image/gif');
                break;
            case 'svg':
                header('Content-Type: image/svg+xml');
                break;
            case 'ico':
                header('Content-Type: image/x-icon');
                break;
        }

        readfile($filePath);
        exit;
    } else {
        notFound();
    }
}

function dispatch(string $uri, string $method): void
{
    if (isStaticFile($uri)) {
        serveStaticFile($uri);
        return;
    }

    $uri = normalizeUri($uri);

    if (!in_array(strtoupper($method), ALLOW_METHODS)) {
        notFound();
    }
    $filePath = getFilePath($uri, $method);
    if (file_exists($filePath)) {
        include($filePath);
        return;
    } else {
        notFound();
    }
}
