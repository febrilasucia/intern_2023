<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $guarded=[];
    
    public function murid(){
        return $this->belongsToMany(Murid::class);
    }

    
}
