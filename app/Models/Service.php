<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = ['solution_id','name','description','slug','icon'];

    public function solution()
    {
        return $this->belongsTo(Solution::class);
    }
}
