<?php

namespace App\Http\Resources\Api\v1;
use Carbon\Carbon;

use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */


    public function toArray($request)
    {
                return [
            'id' => $this->id,        
            'user_id' => $this->user_id,
            'title' => $this->title,
            'text' => $this->text,
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s',$this->created_at)->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s',$this->updated_at)->format('Y-m-d H:i:s'),

        ];


    }
}
