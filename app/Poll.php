<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Poll extends Model
{
    protected $table = 'polls';
    protected $primaryKey = 'id';

    public $incrementing = false;
    protected $dateFormat = 'd-m-Y';



    protected $fillable = ['title', 'thumb', 'slug', 'category_id', 'overview', 'content', 'notes', 'faqs',  'start_at', 'end_at', 'state', 'created_at', 'updated_at'];

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
