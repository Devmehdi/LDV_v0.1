<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VoitureResource extends JsonResource
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
            'nom'=>$this->voiture_nom,
            'agence'=>$this->agence_id,
            'matricule'=>$this->matricule,
            'description'=>$this->description,
            'prix'=>$this->prix,
            'image'=>$this->image,
            'modle'=>$this->model,
            'Estock'=>$this->Enstock,
            'type'=>$this->type_id,
            'coleur'=>$this->coleur_id,
            'carburant'=>$this->carburant_id,
            'marque'=>$this->marque_id,
            'deleted_at'=>$this->deleted_at,
            'updated_at'=>$this->update_at,
            'created_at'=>$this->created_at,
          ];
        return parent::toArray($request);
    }
}
