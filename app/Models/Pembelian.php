<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    protected $table = 'pembelian';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function suppliyer()
    {
        return $this->belongsTo(Suppliyer::class);
    }
}
