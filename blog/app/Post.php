<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //protected $guarded = [];
    
    // another way
    protected $fillable = ['title', 'body'];
}
