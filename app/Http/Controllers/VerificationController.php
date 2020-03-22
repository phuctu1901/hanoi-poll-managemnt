<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
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
        $verificationDefinitionId = $request->input( "verificationDefinitionId" );
        $connectionId = $request->input( 'connectionId' );

        $data =[
            "verificationDefinitionId"=>$verificationDefinitionId,
            "connectionId"=>$connectionId
        ];
        try{
            $response = $this->sendRequest('POST', 'https://api.streetcred.id/agency/v1/verifications', $data);
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
