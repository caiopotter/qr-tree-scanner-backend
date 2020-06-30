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
        return $this->belongsToMany('App\User', 'users_trees', 'tree_id', 'user_id');
    }

    public function code()
    {
        return $this->hasOne('App\QRCode');
    }
}
