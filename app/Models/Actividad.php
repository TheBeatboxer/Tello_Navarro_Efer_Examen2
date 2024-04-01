<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'IdActividad';
    protected $fillable = [
        'Nombre',
        'Descripcion',
        'Hora',
        'Dia'
    ];

    public function ActividadAnimal()
    {
        return $this->hasMany(ActividadAnimal::class, 'IdActividad');
    }

}
