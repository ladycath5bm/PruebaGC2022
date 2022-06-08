<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gce_caractersiticas extends Model
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

    public function scopeGet()
    {
        return Gce_caractersiticas::paginate(20);
    }

    public function scopeGetOne(int $gce_id): Gce_caractersiticas
    {
        return Gce_caractersiticas::findOrFail($gce_id);
    }

}
