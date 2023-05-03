<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable=[
        'nmkategori','ket'
    ];

    protected $primarykey='id';

    
    public function Barang(){
        return $this->hasMany('App\Models\Barang','idkategori');
    }
}
