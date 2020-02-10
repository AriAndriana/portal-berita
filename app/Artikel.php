<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = [
        'judul',
        'slug',
        'deskripsi',
        'foto',
        'user_id',
        'kategori_id'
    ];
    public $timestamps = true;

    public function kategori(){
        // data Model 'Artikel' bisa dimiliki oleh Model 'Kategori' melalui 'kategori_id'
        return $this->belongsTo('App\Kategori', 'kategori_id');
    }
    public function user(){
        // Data Model 'Artikel' bisa dimiliki oleh Model User melalui 'user_id'
        return $this->belongsTo('App\User', 'user_id');
    }
    public function tag(){
        // Model 'Artikel' Memiliki relaissi Many to Many(belongsToMany)
        // terhadap model 'tag' yang terhubung oleh
        // table 'artikel_tag' masing-masing sebagai 'tag_id' dan 'artikel_id'
        return $this->belongsToMany(
            'App\Tag',
            'artikel_tag',
            'artikel_id',
            'tag_id'
        );
    }
}
