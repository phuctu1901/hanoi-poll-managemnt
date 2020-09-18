<?php

namespace App\Http\Controllers\API\DID;

use App\Events\DID\ConnectionCreatedEvent;
use App\Events\DID\ConnectionResponsedEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConnectionEventController extends Controller
{
    public $connectionController;

    public function createdConnection(string $connection_id){
        event(new ConnectionCreatedEvent($connection_id));
//        $data= $this->connectionController->getConnection($connection_id);
    }


    public function responsedConnection(string $connection_id){
        event(new ConnectionResponsedEvent($connection_id));
//        $data= $this->connectionController->getConnection($connection_id);

    }

}
