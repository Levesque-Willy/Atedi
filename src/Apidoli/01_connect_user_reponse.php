<?php
require_once '../vendor/autoload.php';

use Symfony\Component\HttpClient\HttpClient ;

$httpClient = HttpClient::create();

$response = $httpClient->request('GET', 'https://lbouquet.doli.sio-ndlp.fr/api/index.php/login?login=Slam2&password=fgCDrvFbWu9ev7&reset=0');

$statusCode = $response->getStatusCode();
print($statusCode . "<br/><br/>");

$contentType = $response->getHeaders()['content-type'][0];
print($contentType . "<br/><br/>");

$content = $response->getContent();
print($content . "<br/><br/>");
print('4<br/>');

$content_decode = json_decode($content);
print_r($content_decode);
print("<br/><br/>");

print("Clé API = " . $content_decode->success->token);
print("<br/><br/>");
?>