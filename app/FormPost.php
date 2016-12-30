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

    // Defining a Query Scope below. Query scope defines query as a static that be re-used instead of typing queries again and again
    // Naming convention: "scope" is a fix Keyword followed up name of the query scope with first word Capital
    // An example below
    
    public static function scopeOrderByName($query) {
        return $query->orderBy('title', 'desc')->get();
    }
}
