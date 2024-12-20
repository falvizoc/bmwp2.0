<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    use HasFactory;

    protected $table = 'solutions';

    protected $fillable = ['name','slug','sort','icon'];

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
