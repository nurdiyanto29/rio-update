<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangToko extends Model
{
    use HasFactory;
    protected $table = 'barang_toko';
    protected $guarded = [];

    public function barang(){
        return $this->belongsTo(Barang::class);
    }
}
