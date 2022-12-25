<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function kelas()
    {
        return $this -> belongsTo(Kelas::class);
    }

    public function teachers()
    {
        return $this -> belongsTo(Teacher::class);
    }

    public function user(){
        return $this->belongsTo(Kelas::class);
    }
    
    public function mapel(){
        return $this->belongsToMany(Mapel::class)->withPivot(['nilai']);
    
    }
}
