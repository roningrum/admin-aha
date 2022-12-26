<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id'=>$this->id,
            'name'=>$this->title,
            'excerpt'=>$this->excerpt,
            'user_id'=>$this->user_id,
            'category_id'=>$this->category_id,
            'body'=>$this->body
    }
}
