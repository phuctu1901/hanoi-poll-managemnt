<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class CredentialController extends Controller
{
    protected $verification_id = '9088443d-0d29-4695-a360-248e9ea99c48';
    protected $bearer_token = 'WW1l75JhPpWJ0TddnwhGcuuxO29tmbmSEZG9HLx4Pg0';
    function sendRequest($method, $url, $data){
        try {

            $client = new \GuzzleHttp\Client();
//            $data = ["multiParty"=> false,
//                "name"=> "Hệ thống quản lý định danh số Thành phố Hà Nội"];
//            $url = "https://api.streetcred.id/agency/v1/connections";
//            $token = '';
            $response = $client->request($method,$url,  [
                'headers' => [
                    'Authorization' => 'Bearer '.$this->bearer_token
                ],
                'json'=>$data
            ]);
//        $response =  $client->send($request);
            return $response;
        } catch (RequestException $exception){
            return $exception;
        }

    }
    function verification(){
        try{
            $response = $this->sendRequest('GET', 'https://api.streetcred.id/agency/v1/definitions/verifications', null);
            return response()->json([
                'error' => false,
                'data'  => \GuzzleHttp\json_decode($response->getBody()->getContents()),
            ], $response->getStatusCode());
        }
        catch (RequestException $exception){
            return response()->json([
                'error' => true,
                'data'  =>$exception,
            ], $response->getStatusCode());
        }


    }
}
