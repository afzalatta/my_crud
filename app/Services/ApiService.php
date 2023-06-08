<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Http;

class ApiService
{
    public function getApi()
    {
        $client = new Client();
        $request = new Request('GET', 'https://newsapi.org/v2/top-headlines?country=au&apiKey=85e1d6c9734a4d92bafe3a902ffca257');
        $res = $client->sendAsync($request)->wait();
        echo $res->getBody();
    }



    public function postApi()
    {


    }


}
