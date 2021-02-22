<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Configuration extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'         => $this->id,
            'id_related'         => $this->id_related,
            'name'       => $this->name,
            'type_related'    => $this->type_related,
            'value'     => $this->value,
            'description'     => $this->description,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
