<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Park extends Model
{
    protected $fillable = [
        'name'
    ];

    public function trees()
    {
        return $this->belongsToMany('App\Tree', 'parks_trees', 'park_id', 'tree_id')->withPivot(['map_latitude', 'map_longitude']);
    }
}