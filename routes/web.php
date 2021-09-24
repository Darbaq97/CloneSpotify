<?php

/** @var \Laravel\Lumen\Routing\Router $router */
use GuzzleHttp\Client;
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

$router->get('/', function () use ($router) {
   return $router->app->version();
});
//require 'vendor\guzzlehttp\guzzle\src\Exception\RequestException.php';

$router->get('/', function(){
  
   

   $client = new Client();

   $response = $client -> request ('GET', 'https://api.spotify.com/v1/albums',[

    'headers' => [ 
     'api_token' => ['Bearer BQB91CNqLwmV94R3pV14RTnUzv-JBTKPOonQ4gc6cO1P7RGPJRe7v7iBjpzKsuWZ-ABFi4ZBaqMIysOvJeM04KMXTk_3naWDDswqQu5F5Q5J4x3HwXLj20WRowDyureRaUA7Tk7kvQAC5wYBTleBL3ac3YY6EIM']
    ]
   ]);

     //echo $response -> getStatusCode();

     //echo $response -> getHeader('content-type');

     //echo $response ->getBody();

     //$response = $client->request('GET', 'albums');

     dd($response->getBody()->getContents());

     $decoded = json_decode($res->getBody(), true);

});
