<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobi extends Model
{
    protected $fillable = ['nama'];
    
    public function Siswa(){
        return $this->belongsToMany(Siswa::class);
    }
}
