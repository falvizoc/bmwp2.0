<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $table = 'pages';

    protected $fillable = ['name'];

    # Relacion muchos a muchos
    public function preguntas_frecuentes(){
        return $this->belongsToMany(FrecuentQuestion::class);
    }
}
