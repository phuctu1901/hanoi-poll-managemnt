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
                            "name": "Proof of address",
                            "version": "1.0",
                            "requested_attributes": {
                              "0_name_uuid": {
                                "name": "dob",
                                "restrictions": [
                                  {
                                    "cred_def_id": "'.$cred_def_id.'"
                                  }
                                ]
                              }
                            },
                            "requested_predicates": {
                            }
                          }
                        }';


        try{
        $url = ''.$api_url.'/present-proof/send-request';

        $client = new \GuzzleHttp\Client();

            $response = $client->request('POST',$url,  [
                'json'=>json_decode($json_string, true)
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
            $response = $this->sendRequest('GET', 'https://api.streetcred.id/agency/v1/verifications/'.$id.'/verify', null);

//            return response()->json([
//                'error' => false,
//                'data'  => $response,
//            ], 401);

            if ($response=='null'){
                return response()->json([
                    'error' => false,
                    'data'  => \GuzzleHttp\json_decode($response->getBody()->getContents()),
                ], $response->getStatusCode());
            } else{
                return response()->json([
                    'error' => true,
//                    'data'  => '',
                ], 500);
            }

        }
        catch (RequestException $exception){
            return response()->json([
                'error' => true,
            ], 500);
        }
    }

}
