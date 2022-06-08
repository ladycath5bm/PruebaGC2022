<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\AddOneCharacteristic;
use App\Models\Gce_caracteristicas;

class Gce_caracteristicasController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Gce_caracteristicas();
    }

    public function getAll(): void
    {
        $response = $this->model->get();
        echo json_encode($response);
    }

    public function addOne(Request $request): void
    {
        $response = (new AddOneCharacteristic())->create($request->toArray());
        echo json_encode($response);
    }

    public function getOne(Gce_caracteristicas $gce_characteristic)
    {
        $characteristic = $this->model->showOne($gce_characteristic->gce_id);
        echo json_encode($characteristic);
    }

}
