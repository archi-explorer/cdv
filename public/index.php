<?php

require '../vendor/autoload.php';

$_uri = $_SERVER["REQUEST_URI"];

$router = new AltoRouter();

require './routes/route.php';

/**
 * Attention à l'ordre des paramêtres
 */
// $router->map('GET', '/blog/[*:slug]-[i:id]', function ($slug, $id) {
//     echo "Je suis sur l'article $slug avec le numéro $id";
// });
