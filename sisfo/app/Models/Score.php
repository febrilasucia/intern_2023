<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function murid(){
        return $this->belongsToMany(Siswa::class);
    }
    public function mapel(){
        return $this->belongsTo(Mapel::class);
    }
    
}
