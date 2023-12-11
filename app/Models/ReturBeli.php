<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturBeli extends Model
{
    use HasFactory;
    protected $table = 'retur_beli';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function barangMasuk()
    {
        return $this->belongsTo(BarangMasuk::class);
    }
    public function pembelian()
    {
        return $this->belongsTo(Pembelian::class);
    }
}
