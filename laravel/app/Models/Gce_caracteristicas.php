<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gce_caracteristicas extends Model
{
    use HasFactory;

    protected $table = 'gce_caracteristicas';
    public $timestamps = false;
    protected $primaryKey = 'gce_id';
    protected $fillable = [
        'gce_id',
        'gce_nombre_equipo',
        'gce_procesador',
        'gce_disco_duro',
        'gce_pantalla',
        'gce_grafica',
        'gce_teclado',
        'gce_estado',
        'gce_board',
        'gce_mouse',
        'gce_case',
        'gce_ram',
    ];

    public function get()
    {
        return Gce_caracteristicas::paginate(20);
    }

    public function showOne(int $gce_id): Gce_caracteristicas
    {
        return Gce_caracteristicas::findOrFail($gce_id);
    }

}
