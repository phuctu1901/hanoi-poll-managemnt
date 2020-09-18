<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Proof;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    function create(Request $request){
        $connectionId = $request->input( 'connectionId' );
        $api_url = $_ENV['ACA_PY_URL'];
        $cred_def_id = $_ENV['CRED_ID'];

        $json_string = '{
                          "connection_id": "'.$connectionId.'",
                          "proof_request": {
                            "version": "1.0",
                            "nonce": "12341233111",
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
                          "comment": "No comment here"
                        }';
//        return ['data'=>$json_string];

        try{
        $url = ''.$api_url.'/present-proof/send-request';

        $client = new \GuzzleHttp\Client();

            $response = $client->request('POST',$url,  [
                'json'=>json_decode($json_string, false)
            ]);

            $data_response = \GuzzleHttp\json_decode($response->getBody());


            $data_array=[
                "rawdata"=>$response->getBody(),
                "pre_ex_id"=>$data_response->presentation_exchange_id,
                "code"=>"001"
            ];

            $this->createProofRecord($data_array);
            return response()->json([
                'error' => false,
                'data'  => \GuzzleHttp\json_decode($response->getBody()),
            ], $response->getStatusCode());
        }
        catch (RequestException $exception){
//            return $exception;
            return response()->json([
                'error' => true,
                'data'  =>$exception,
            ], 500);
        }
    }

    function detail($id){
        try{
            $api_url = $_ENV['ACA_PY_URL'];
            $url = $url = ''.$api_url.'/present-proof/records/'.$id.'';

            $client = new \GuzzleHttp\Client();

            $response = $client->request('GET',$url,  []);

            $data_response = \GuzzleHttp\json_decode($response->getBody());

            $data_array=[
                "response"=>$response->getBody(),
                "pre_ex_id"=>$data_response->presentation_exchange_id
            ];


            $this->updateProofRecord($data_array);
//            $id = Proof::where('pre_ex_id',$data_response->presentation_exchange_id)->firstOrFail();

            return response()->json([
                'error' => false,
                'data'  => \GuzzleHttp\json_decode($response->getBody()),
//                'proof_id' => $id
            ], $response->getStatusCode());

        }
        catch (RequestException $exception){
            return response()->json([
                'error' => true,
            ], 500);
        }
    }

    # Create did to database
    protected function createProofRecord(array $data)
    {
        return Proof::create($data);
    }

    # Update connection record to database
    protected function updateProofRecord(array $data)
    {

//        dd($id);
        $record = Proof::where('pre_ex_id',$data['pre_ex_id'])->firstOrFail();
//        $new_data =
        $record->response = $data['response'];
        $record->save();

    }

}
