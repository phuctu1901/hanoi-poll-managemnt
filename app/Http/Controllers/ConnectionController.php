<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function GuzzleHttp\Psr7\str;


class ConnectionController extends Controller
{
    function create(){
        $client = new \GuzzleHttp\Client();
        $data = ["multiParty"=> false,
            "name"=> "Hệ thống quản lý định danh số Thành phố Hà Nội"];
        $url = "https://api.streetcred.id/agency/v1/connections";
        $token = 'WW1l75JhPpWJ0TddnwhGcuuxO29tmbmSEZG9HLx4Pg0';
        $response = $client->request('POST',$url,  [
            'headers' => [
                'Authorization' => 'Bearer '.$token
            ],
            'json'=>$data
        ]);
//        $response =  $client->send($request);
        return response()->json([
            'error' => false,
            'data'  => \GuzzleHttp\json_decode($response->getBody()->getContents()),
        ], $response->getStatusCode());

    }

    function get($id){
        $client = new \GuzzleHttp\Client();

        $url = "https://api.streetcred.id/agency/v1/connections/".$id;
        $token = 'WW1l75JhPpWJ0TddnwhGcuuxO29tmbmSEZG9HLx4Pg0';
        $response = $client->request('GET',$url,  [
            'headers' => [
                'Authorization' => 'Bearer '.$token
            ],
        ]);
//        $response =  $client->send($request);
        return response()->json([
            'error' => false,
            'data'  => \GuzzleHttp\json_decode($response->getBody()->getContents()),
        ], $response->getStatusCode());

    }
}
