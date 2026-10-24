<?php

$path = rawurldecode(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
if ($path === "/price-request.php") {
    putenv("GARANT_PRICE_PREVIEW=1");
    require __DIR__ . "/price-request.php";
    return;
}
if ($path === "/" || $path === "/price.php" || $path === "/index.html") {
    header("Content-Type: text/html; charset=utf-8");
    readfile(__DIR__ . "/preview/index.html");
    return;
}
$base = realpath(__DIR__ . "/preview");
$file = realpath($base . $path);
$types = [
    "css" => "text/css",
    "js" => "text/javascript",
    "png" => "image/png",
    "jpg" => "image/jpeg",
    "jpeg" => "image/jpeg",
    "gif" => "image/gif",
    "svg" => "image/svg+xml",
    "ico" => "image/x-icon",
];
$extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
if (
    $file &&
    strpos($file, $base . DIRECTORY_SEPARATOR) === 0 &&
    is_file($file) &&
    isset($types[$extension])
) {
    header("Content-Type: " . $types[$extension]);
    readfile($file);
    return;
}
http_response_code(404);
echo "This page is outside the local price preview.";
