<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TreeShortFeature extends Model
{
    protected $fillable = [
        'tree_id', 'question', 'answer'
    ];

    public function tree()
    {
        return $this->belongsTo('App\Tree');
    }
}
