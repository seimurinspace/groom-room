<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/public/index.php';
        break;
    case '' :
        require __DIR__ . '/public/index.php';
        break;
    default:
        require __DIR__ . '/public/error404.php';
        break;
}