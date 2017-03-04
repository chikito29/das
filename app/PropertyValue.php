<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyValue extends Model
{
    public function document() {
        return $this->belongsTo('App\Document');
    }

    public function property() {
        return $this->belongsTo('App\Property');
    }
}
