<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $guarded =['id'];

    protected $hidden=['slug'];

    public function post(){
        return $this->hasMany(Post::class);
    }

    // protected $fillable =['nama', 'slug'];
    
    // public function post(){
    //     return $this->hasMany(Post::class);
    // }
}
