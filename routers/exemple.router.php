<?php

namespace routers;
use models\Exemple;

$app->get('/', function ($request, $response) {
	$response->write("Hello, Everybody");
	return $response;
});

$app->get('/hello/{name}', function ($request, $response, $args) {
	$response->write("Hello, " . $args['name']);
	return $response;
});

$app->get('/atome', function ($request, $response, $args) {
	$ex = new Exemple();
	$data = $ex->getAllData();
	echo json_encode($data);
});

$app->get('/atome/{name}', function ($request, $response, $args) {
	$ex = new Exemple();

	$data = $ex->getData($args['name']);
	echo json_encode($data);
});
    
