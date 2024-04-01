<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Animal extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'IdAnimal';
    protected $fillable = [
        'IdRecinto',
        'IdEspecie',
        'IdCuidador',
        'Nombre',
        'Edad',
        'NombreCientifico',
        'Sexo'
    ];

    public function ActividadAnimal()
    {
        return $this->belongsTo(ActividadAnimal::class, 'IdAnimal');
    }

    public function Recinto()
    {
        return $this->belongsTo(Recinto::class, 'IdRecinto');
    }

    public function Especie()
    {
        return $this->belongsTo(Especie::class, 'IdEspecie');
    }
    public function Cuidador()
    {
        return $this->belongsTo(Cuidador::class, 'IdCuidador');
    }
    
}