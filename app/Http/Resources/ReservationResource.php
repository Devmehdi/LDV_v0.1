<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReservationResource extends JsonResource
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
            'reservation_id'=>$this->reservation_id,
            'update_at'=>$this->update_at,
            'create_at'=>$this->created_at,
          ];
        return parent::toArray($request);
    }
}
