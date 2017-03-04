<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function properties() {
        return $this->hasMany('App\Property');
    }

    public function document() {
        return $this->belongsTo('App\Document');
    }
}
