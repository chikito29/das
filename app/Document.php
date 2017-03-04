<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use SoftDeletes;

    public function category() {
        return $this->hasOne('App\Category', 'document_id');
    }

    public function propertyValue() {
        return $this->hasOne('App\PropertyValue');
    }
}
