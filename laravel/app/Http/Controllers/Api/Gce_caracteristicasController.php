<?php

namespace App\Http\Controllers\Api;

use App\Actions\AddOneCharacteristic;
use App\Http\Controllers\Controller;
use App\Http\Resources\Gce_caracteristicasCollection;
use App\Http\Resources\Gce_caracteristicasResource;
use App\Models\Gce_caracteristicas;
use Illuminate\Http\Request;

class Gce_caracteristicasController extends Controller
{
    public function getAll(): Gce_caracteristicasCollection
    {
        $caracteristicas = Gce_caracteristicas::all();

        return Gce_caracteristicasCollection::make($caracteristicas)
            ->additional(['mensaje' => 'Completado']);
    }

    public function addOne(Request $request)
    {
        $addOneCharacteristic = (new AddOneCharacteristic())->create($request->toArray());

        return Gce_caracteristicasResource::make($addOneCharacteristic)
            ->additional(['mensaje' => 'Completado']);
    }

    public function getOne(Gce_caracteristicas $gce_caracteristicas)
    {
        return Gce_caracteristicasResource::make($gce_caracteristicas)
            ->additional(['mensaje' => 'completado']);
    }
}
