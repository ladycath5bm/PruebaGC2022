<?php

namespace App\Actions;

use App\Models\Gce_caractersiticas;

class AddOneCharacteristic
{
    public function create(array $data)
    {
        $characteristic = new Gce_caractersiticas();

        $characteristic->gce_nombre_equipo = $data['gce_nombre_equipo'];
        $characteristic->gce_procesador = $data['gce_procesador'];
        $characteristic->gce_disco_duro = $data['gce_disco_duro'];
        $characteristic->gce_pantalla = $data['gce_pantalla'];
        $characteristic->gce_grafica = $data['gce_grafica'];
        $characteristic->gce_teclado = $data['gce_teclado'];
        $characteristic->gce_estado = $data['gce_estado'];
        $characteristic->gce_board = $data['gce_board'];
        $characteristic->gce_mouse = $data['gce_mouse'];
        $characteristic->gce_case = $data['gce_case'];
        $characteristic->gce_ram = $data['gce_ram'];

        $characteristic->save();
    }
}