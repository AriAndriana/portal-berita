<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    protected $fillable = ['nama', 'id_mahasiswa'];
    public $Timestamps = true;

    public function mahasiswa() {
        return $this->belongsTo('App\Mahasiswa', 'id_mahasiswa');
    }
}
