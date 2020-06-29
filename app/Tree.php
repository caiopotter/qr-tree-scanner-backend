<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    protected $fillable = [
        'common_name', 'scientific_name', 'feature', 'origin', 'wood_type', 'utility'
    ];
}
