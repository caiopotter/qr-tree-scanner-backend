<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QRCode extends Model
{

    public function tree()
    {
        return $this->belongsTo('App\Tree');
    }
}
