<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    protected $fillable = [
        'common_name', 'scientific_name', 'feature', 'origin', 'wood_type', 'utility'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User', 'users_trees', 'tree_id', 'user_id')->withTimestamps();
    }

    public function parks()
    {
        return $this->belongsToMany('App\Park', 'parks_trees', 'tree_id', 'park_id')->withPivot(['map_latitude', 'map_longitude']);
    }

    public function code()
    {
        return $this->hasOne('App\QRCode');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'tree_id');
    }

    public function shortFeatures()
    {
        return $this->hasMany('App\TreeShortFeature', 'tree_id');
    }
}
