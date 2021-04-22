<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AgenceResource extends JsonResource
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
            'nom'=>$this->agence_name,
            'telephone'=>$this->agences_tel,
            'ville'=>$this->ville,
            'description'=>$this->description,
            'addresse'=>$this->addresse,
            'deleted_at'=>$this->deleted_at,
            'update_at'=>$this->update_at,
            'create_at'=>$this->created_at,
          ];
        return parent::toArray($request);
    }
}
