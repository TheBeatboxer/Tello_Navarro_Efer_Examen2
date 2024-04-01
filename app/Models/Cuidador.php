<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidador extends Model
{
    use HasFactory;

    protected $primaryKey = 'IdCuidador';
    protected $fillable = [
        'Nombre',
        'Apellido',
        'Edad',
        'Especialidad'
    ];

    public function Animal()
    {
        return $this->hasMany(Animal::class, 'IdCuidador');
    }
}
