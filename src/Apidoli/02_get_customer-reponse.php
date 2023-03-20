<?php
require_once '../vendor/autoload.php';

use Symfony\Component\HttpClient\HttpClient ;

$httpClient = HttpClient::create();

$response = $httpClient->request('GET', 'https://lbouquet.doli.sio-ndlp.fr/api/index.php/thirdparties?DOLAPIKEY=8n8O4975Miz06XpO6HAKdfmOJQpkjSz3&limit=1&sqlfilters=t.nom="Christelle LAVEILLE"');

$statusCode = $response->getStatusCode();

$contentType = $response->getHeaders()['content-type'][0];


$content = $response->getContent();

print('4<br/>');

$content_decode = json_decode($content);

print("<br/><br/>");

print("Id du client = " .$content_decode[0]->id );
print("<br/><br/>");