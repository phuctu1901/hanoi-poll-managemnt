<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PollDetail extends Model
{
    protected $table = 'poll_details';
    protected $primaryKey = 'id';

    public $incrementing = false;
    protected $dateFormat = 'd-m-Y';
    protected $fillable = ['content','poll_id','proof_id','created_at','updated_at'];
}
