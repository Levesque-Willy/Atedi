<?php 
// require_once '../vendor/autoload.php';

namespace App\Services;

use Symfony\Component\HttpClient\HttpClient ;


class DolibarrHelper{

    public function getClientId(String $nomClient, String $prenom) {
        
        // @todo 
        $httpClient = HttpClient::create();
        $response = $httpClient->request('GET', 'https://lbouquet.doli.sio-ndlp.fr/api/index.php/
            thirdparties?DOLAPIKEY=8n8O4975Miz06XpO6HAKdfmOJQpkjSz3&limit=1&sqlfilters=t.nom="'.$nomClient." ".$prenom .'"');
        $statusCode = $response->getStatusCode();
        $contentType = $response->getHeaders()['content-type'][0];
        $content = $response->getContent();
        $content_decode = json_decode($content);
        if($content_decode != 200)
        {

        }
        return $content_decode;
        
}
    public function getProduit(String $nomProduit)
    {
        $httpClient = HttpClient::create();
        $response = $httpClient->request('GET', 'https://lbouquet.doli.sio-ndlp.fr/api/index.php/products?limit=1&sqlfilters=t.label="'.$nomProduit.'"&DOLAPIKEY=8n8O4975Miz06XpO6HAKdfmOJQpkjSz3');
        $statusCode = $response->getStatusCode();
        $contentType = $response->getHeaders()['content-type'][0];
        $content = $response->getContent();
        $content_decode = json_decode($content);
        return $content_decode;
    }
}
