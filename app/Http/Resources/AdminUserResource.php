<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdminUserResource extends JsonResource
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
            'username'=>$this->username,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'created_at'=>$this->creatted_at->format('Y-m-d'),
            'Published at'=>$this->created_at->diffForHumans(),
        ];
    }
}
