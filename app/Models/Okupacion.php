<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Okupacion extends Model
{
    use HasFactory;

    protected $table = 'okupaciones'; // Nombre correcto de la tabla


    protected $fillable = [
        'calle',
        'cp',
        'numero',
        'localidad',
        'fecha_okupacion',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
