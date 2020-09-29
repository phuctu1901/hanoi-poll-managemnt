<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Poll;
use App\Proof;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    function create(Request $request){
        $connectionId = $request->input( 'connectionId' );
        $poll_id = $request->input('poll_id');

        $poll = Poll::where('id',$poll_id)->firstOrFail();

        $api_url = $_ENV['ACA_PY_URL'];
//        $cred_def_id = $_ENV['CRED_ID'];

        $json_string = '{
                          "connection_id": "'.$connectionId.'",
                          "proof_request": {
                            "version": "1.0",
                            "nonce": "12341233111",
                            "requested_predicates": '.$poll->proof_request_pre.',
                            "requested_attributes": '.$poll->proof_request_re.',
                            "name": "'.$poll->title.'"
                          },
                          "comment": "No comment here"
                        }';

//        return $json_string;
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
            $debug = $_ENV['APP_DEBUG'];

            $url = $url = ''.$api_url.'/present-proof/records/'.$id.'';

            $client = new \GuzzleHttp\Client();

            $response = $client->request('GET',$url,  []);

            $data_response = \GuzzleHttp\json_decode($response->getBody());

            $data_array=[
                "response"=>$response->getBody(),
                "pre_ex_id"=>$data_response->presentation_exchange_id
            ];
//            if ($debug == false){
                $a_prime=$data_response->presentation->proof->proofs[0]->primary_proof->eq_proof->a_prime;

                $record = Proof::where('a_prime', $a_prime)->first();

                if ($record){
                    $this->deleteProofRecord($data_array);
                    return response()->json([
                        'error' => true,
                        'data'  => \GuzzleHttp\json_decode($response->getBody()),
                        'reason_code' => '1'
                    ], 500);
                }
//            }
//            else {
//                $a_prime='';
//            }

            $this->updateProofRecord($data_array, $a_prime);

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
    protected function updateProofRecord(array $data, string $a_prime)
    {

        $record = Proof::where('pre_ex_id',$data['pre_ex_id'])->firstOrFail();
        $record->response = $data['response'];
        $record->a_prime= $a_prime;
        $record->save();
    }

    protected function deleteProofRecord(array $data)
    {
        $record = Proof::where('pre_ex_id',$data['pre_ex_id'])->firstOrFail();
        $record->delete();
    }

}
