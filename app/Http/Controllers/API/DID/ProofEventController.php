<?php

namespace App\Http\Controllers\API\DID;

use App\Events\Proof\ProofRequestReceivedEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProofEventController extends Controller
{
    public $connectionController;

    public function presentation_received(string $connection_id){
        event(new ProofRequestReceivedEvent($connection_id));
//        $data= $this->connectionController->getConnection($connection_id);
    }

}
