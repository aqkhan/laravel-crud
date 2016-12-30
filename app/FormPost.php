<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormPost extends Model
{
    //
    protected $fillable = [
        'title'
    ];

    // Defining a mutator below
    // Mutator manipulate data before storing it in database
    // Has same format for naming convention as Accessor with a change of "set" instead "get"
    // An example below

    public function setTitleAttribute($value) {
        $this->attributes['title'] = strtoupper($value);
    }
}
