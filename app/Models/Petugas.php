<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;

    protected $fillable=[
        'nmpetugas','jenkel','tgllahir','alamat','notelp','iduser'
    ];

    public function Petugas(){
        return $this->belongsTo('App\Models\Petugas','iduser');
    }
}
