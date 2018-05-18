<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$app->get('/', function() use ($app){
	return $app->version();
});

$app->get('/kategori', 'buku@index');
$app->get('/kategori/{id}','buku@show');
$app->post('/kategori', 'buku@store');
$app->put('/kategori/{id}', 'buku@update');
$app->delete('/kategori/{id}', 'buku@destroy');

$app->get('/buku', 'buku@indexbuku');
$app->get('/buku/{id}','buku@showbuku');
$app->post('/buku', 'buku@storebuku');
$app->put('/buku/{id}', 'buku@updatebuku');
$app->delete('/buku/{id}', 'buku@destroybuku');