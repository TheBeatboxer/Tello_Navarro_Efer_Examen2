<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recinto extends Model
{
    use HasFactory;

    protected $primaryKey = 'IdRecinto';
    protected $fillable = [
        'IdRecinto',
        'Nombre',
        'Capacidad',
        'Ubicacion'
    ];

    public function Animal()
    {
        return $this->hasMany(Animal::class, 'IdRecinto');
    }

}
