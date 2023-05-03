<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable=[
        'nobarang','namabarang','idkategori','stok','keterangan'
    ];

    public function Kategori(){
        return $this->belongsTo('App\Models\Kategori','idkategori');
    }

    public function Inventor(){
        return $this->hasMany('App\Models\Inventor','idbarang');
    }
}
