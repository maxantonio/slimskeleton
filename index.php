<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim(array(
  'view' => new \Slim\Views\Twig()
));


// GET routes
$app->get('/', function () use ($app) {
    $app->render('home.php');
})->name('home');


$app->run();
