<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Gce_caracteristicasResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request): array
    {
        return [
            'type' => 'gce_caracteristicas',
            'id' => (string)$this->resource->getRouteKey(),
            'attributes' => [
                'gce_nombre_equipo' => $this->resource->gce_nombre_equipo,
                'gce_board' => $this->resource->gce_board,
                'gce_case' => $this->resource->gce_board,
                'gce_procesador' => $this->resource->gce_procesador,
                'gce_grafica' => $this->resource->gce_grafica,
                'gce_ram' => $this->resource->gce_ram,
                'gce_disco_duro' => $this->resource->gce_disco_duro,
                'gce_teclado' => $this->resource->gce_teclado,
                'gce_mouse' => $this->resource->gce_mouse,
                'gce_pantalla' => $this->resource->gce_pantalla,
                'gce_estado' => $this->resource->gce_estado,
            ],
            'links' => [
                'self' => route('api.characteristics.getOne', $this->resource),
            ],
        ];
    }
}
