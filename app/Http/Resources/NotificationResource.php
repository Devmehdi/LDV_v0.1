<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NotificationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'isopen'=>$this->isopen,
            'activeflage'=>$this->activeflage,
            'update_at'=>$this->update_at,
            'create_at'=>$this->created_at,
          ];
        return parent::toArray($request);
    }
}
