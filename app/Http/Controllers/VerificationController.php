<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class VerificationController extends Controller
{


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
            if ($response->getStatusCode()==200){
                return $response;
            }
        } catch (RequestException $exception){
            return $exception;
        }
        return 'null';

    }

    function list(){
        try{
            $response = $this->sendRequest('GET', 'https://api.streetcred.id/agency/v1/verifications', null);
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

    function detail($id){
        try{
            $response = $this->sendRequest('GET', 'https://api.streetcred.id/agency/v1/verifications/'.$id, null);
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

    function delete($id){
        try{
            $response = $this->sendRequest('GET', 'https://api.streetcred.id/agency/v1/verifications/'.$id, null);
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

    function create(Request $request){
        $connectionId = $request->input( 'connectionId' );

        $api_url = $_ENV['ACA_PY_URL'];
        $cred_def_id = $_ENV['CRED_ID'];

        $json_string = '{
                          "connection_id": "'.$connectionId.'",
                          "proof_request": {
                            "version": "1.0",
                            "requested_predicates": {},
                            "requested_attributes": {
                              "address": {
                                "name": "address",
                                "restrictions": [
                                    {
                                     "cred_def_id": "'.$cred_def_id.'"
                                    }
                                ]
                              }
                            },
                            "name": "Bằng chứng về nơi cư trú"
                          },
                          "comment": "string"
                        }';


        try{
        $url = ''.$api_url.'/present-proof/send-request';

        $client = new \GuzzleHttp\Client();

            $response = $client->request('POST',$url,  [
                'json'=>json_decode($json_string, false)
            ]);
            return response()->json([
                'error' => false,
                'data'  => \GuzzleHttp\json_decode($response->getBody()),
            ], $response->getStatusCode());
        }
        catch (RequestException $exception){
            return $exception;
            return response()->json([
                'error' => true,
                'data'  =>$exception,
            ], 500);
        }
    }

    function verify($id){
        try{
            $api_url = $_ENV['ACA_PY_URL'];
            $url = $url = ''.$api_url.'/present-proof/records/'.$id.'';

            $client = new \GuzzleHttp\Client();

            $response = $client->request('GET',$url,  []);


            return response()->json([
                'error' => false,
                'data'  => \GuzzleHttp\json_decode($response->getBody()),
            ], $response->getStatusCode());

        }
        catch (RequestException $exception){
            return response()->json([
                'error' => true,
            ], 500);
        }
    }

}
