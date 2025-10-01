<?php

namespace Tots\Device\Http\Responses\Event;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
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
            'id' => $this->resource->id,
            'user_id' => $this->resource->user_id,
            'type' => $this->resource->type,
            'payload' => $this->resource->payload,
            'created_at' => $this->resource->created_at,
        ];
    }
}
