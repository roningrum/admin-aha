<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model implements Sluggable
{
    //
    public function sluggeable(){

    }
    
}
