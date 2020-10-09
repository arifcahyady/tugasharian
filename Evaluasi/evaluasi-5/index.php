<?php 	
include 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new GuzzleHttp\Client;

$result = $client->request('POST', 'https://api.pondokprogrammer.com/api/student_login', [
		'form_params' => [
            'email' => 'arifcihoy@gmail.com',
            'password' => 'Anonymous007' 
          ]
], 200);
var_dump($result);