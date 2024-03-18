<?php

namespace Tots\Device\Http\Responses\Device;

use Illuminate\Http\Resources\Json\JsonResource;

class ShowResource extends JsonResource
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
            'device_type' => $this->resource->device_type,
            'device_token' => $this->resource->device_token,
            'app_version' => $this->resource->app_version,
            'device_model' => $this->resource->device_model,
            'language_id' => $this->resource->language_id,
            'created_at' => $this->resource->created_at,
        ];
    }
}
