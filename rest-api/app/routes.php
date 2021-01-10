<?php

use app\Controllers\Game;

$app->any('/', Game::class . ':index');
$app->post('/register', Game::class . ':register');
$app->post('/login', Game::class . ':login');
$app->post('/donate', Game::class . ':donate');
$app->post('/alterpass', Game::class . ':alterpass');
$app->post('/droplist', Game::class . ':droplist');