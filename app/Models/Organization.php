<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    //
    protected $table = 'organizations';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','code','desc','thumb','logo','phone','email','website','created_at','updated_at','created_user'];
}
