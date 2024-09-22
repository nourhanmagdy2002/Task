<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdminTicketResource extends JsonResource
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
            'id'=>$this->user_id,
            'title'=>$this->title,
            'type'=>$this->type,
            'info'=>$this->info,
            'created_at'=>$this->created_at->format('Y-m-d'),
            'Published at'=>$this->created_at->diffForHumans(),
        ];
    }
}
