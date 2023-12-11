<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturJual extends Model
{
    use HasFactory;
    protected $table = 'retur_jual';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function barangkeluar()
    {
        return $this->belongsTo(BarangKeluar::class, 'barang_keluar_id');
    }
    public function penjualan()
    {
        return $this->belongsTo(Penjualan::class);
    }
}
