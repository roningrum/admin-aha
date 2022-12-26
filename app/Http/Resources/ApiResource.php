<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public $status;
    public $message;

    public function __construct($status, $message, $resource)
    {
        $this->status = $status;
        $this->message = $message;
        parent::__construct($resource);   
    }
    public function toArray($request)
    {
        return [
            'success'=>$this->status,
            'message'=>$this->message,
            'data'=>$this->resource
        ];
    }
}
