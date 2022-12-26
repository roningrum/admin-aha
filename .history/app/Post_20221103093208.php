<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model 
{
    //
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
