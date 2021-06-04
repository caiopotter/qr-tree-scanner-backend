<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TreePicture extends Model
{
    protected $fillable = [
        'tree_id', 'url', 'source', 'description'
    ];

    public function tree()
    {
        return $this->belongsTo('App\Tree');
    }
}
