<?php
/*
*   Entry point for the app
*   add routing for php files here!
*
*
*/

include __DIR__ . '/src/Router.php';

$request = $_SERVER['REQUEST_URI'];
$router = new Router($request);

include __DIR__ . '/router.php';
