<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'prenom'=>$this->prenom,
            'username'=>$this->username,
            'email'=>$this->email,
            'telephone'=>$this->telephone,
            'image'=>$this->image,
            'role'=>$this->role_id,
            'addresse'=>$this->addresse,
            'password'=>$this->password,
            'deleted_at'=>$this->deleted_at,
            'update_at'=>$this->update_at,
            'create_at'=>$this->created_at,
          ];
        return parent::toArray($request);
    }
}
