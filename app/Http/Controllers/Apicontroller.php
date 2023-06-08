<?php

namespace App\Http\Controllers;
use App\Services\ApiService;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class Apicontroller extends Controller
{

    public function getData(ApiService $apiService){

    //    return  $apiService->getApi();
    //    return redirect()->toRoute('api');

    }

    public function postApi($url, $data){

    }


}


