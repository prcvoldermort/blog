<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // tell model to use category table
    protected $table = 'categories';

    // define the relationship
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
