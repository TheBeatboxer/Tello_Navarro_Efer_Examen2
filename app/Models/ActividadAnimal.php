<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadAnimal extends Model
{
    use HasFactory;
    protected $primaryKey = 'IdActividadAnimal';
    protected $fillable = [
        'IdActividad',
        'IdAnimal'
    ];

    public function Actividad()
    {
        return $this->belongsTo(Actividad::class, 'IdActividad');
    }

    public function Animal()
    {
        return $this->belongsTo(Animal::class, 'IdAnimal');
    }
}
