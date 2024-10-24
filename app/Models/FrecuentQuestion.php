<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrecuentQuestion extends Model
{
    use HasFactory;

    protected $table = 'frecuent_questions';

    protected $fillable = ['title','description','sort'];
    
    # Relacion muchos a muchos
    public function pages(){
        return $this->belongsToMany(Page::class);
    }
}
