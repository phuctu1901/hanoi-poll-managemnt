<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use Sluggable;
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    //
    protected $table = 'organizations';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','code','slug','desc','thumb','logo','phone','email','website','created_at','updated_at','created_user'];
}
