<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app = new \Slim\App;

$customer = new DB();

// Get All Customers
$app->get('/api/customers/', function (Request $request, Response $response) {
    echo '<h2>CUSTOMERS</h2>';
});