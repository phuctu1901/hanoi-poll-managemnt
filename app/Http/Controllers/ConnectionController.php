<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function GuzzleHttp\Psr7\str;


class ConnectionController extends Controller
{

    function create(){

        $api_url = $_ENV['ACA_PY_URL'];

        $client = new \GuzzleHttp\Client();
        $url = $api_url.'/connections/create-invitation';
        $response = $client->request('POST',$url,  []);

//        $data_response = \GuzzleHttp\json_decode($response->getBody());
////        dd($data_response);
//        $data_array=[
//            "id"=>$data_response->connection_id
//        ];
//
//        $this->createConnectionRecord($data_array);

        return response()->json([
            'error' => false,
            'data'  => \GuzzleHttp\json_decode($response->getBody()),
        ], $response->getStatusCode());
    }

    function get($id){
        $client = new \GuzzleHttp\Client();
        $api_url = $_ENV['ACA_PY_URL'];
        $url = $api_url."/connections/".$id;
        $response = $client->request('GET',$url,  []);


//        $data_response = \GuzzleHttp\json_decode($response->getBody(), true);
////        dd($data_response);
////        $data_array=[
////            "id"=>$data_response->connection_id
////        ];
//
//        $this->updateConnectionRecord($data_response);

        return response()->json([
            'error' => false,
            'data'  => \GuzzleHttp\json_decode($response->getBody()),
        ], $response->getStatusCode());
    }
}
