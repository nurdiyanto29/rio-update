<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangTransfer extends Model
{
    use HasFactory;
    protected $table = 'barang_transfer';
    protected $guarded = [];

    public function barang(){
        return $this->belongsTo(Barang::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function transfer()
    {
        return $this->belongsTo(Transfer::class);
    }
}
