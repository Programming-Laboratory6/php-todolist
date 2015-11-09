<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/', function() use ( $app ) {
    echo "Welcome to REST API";
});

$app->get('/hello/:name', function($name) use ( $app ) {
    echo "Welcome $name";
});

$app->run();

?>