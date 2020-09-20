<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Poll extends Model
{
    use Sluggable;
    protected $table = 'polls';
    protected $primaryKey = 'id';

    public $incrementing = false;
    protected $dateFormat = 'd-m-Y';



    protected $fillable = ['title', 'thumb', 'slug', 'category_id', 'overview', 'content', 'proof_request_re', 'proof_request_pre', 'proof_request_desc', 'notes', 'faqs',  'start_at', 'end_at', 'state', 'created_at', 'updated_at'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
