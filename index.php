<?php
/*
*   Entry point for the app
*   add routing for php files here!
*
*
*/

include $src_path . 'router.php';

$request = $_SERVER['REQUEST_URI'];
$router = new Router($request);

// Add route's here!
$router->get('/home', 'app/home');
$router->get('post', 'app/post');
