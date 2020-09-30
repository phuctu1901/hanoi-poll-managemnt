<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Proof extends Model
{
    protected $table = 'proofs';
    protected $primaryKey = 'id';

    public $incrementing = false;
    protected $dateFormat = 'd-m-Y';
    protected $fillable = ['rawdata','code','a_prime', 'pre_ex_id','response','created_at','updated_at'];
}
