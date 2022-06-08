<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gce_caractersiticas;
use App\Actions\AddOneCharacteristic;

class Gce_caracteristicasController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Gce_caractersiticas();
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

    public function getOne(int $gce_id)
    {
        $characteristic = $this->model->getOne($gce_id);
        echo json_encode($characteristic);
    }

}
