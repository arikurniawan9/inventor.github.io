<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventor extends Model
{
    use HasFactory;

    protected $fillable=[
        'noinventor','tglinventor','idbarang','jmlbarang','sumberbarang','status'
    ];
    protected $primarykey='id';

    public function Barang(){
        return $this->belongsTo('App\Models\Barang','idbarang');
    }
}
