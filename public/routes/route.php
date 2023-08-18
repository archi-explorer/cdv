<?php

$router->map('GET', '/annuaire/[*:collaborater]', 'cv');
$router->map('GET', '/cv', 'cv');

require './controllers/api-ctrl.php';
