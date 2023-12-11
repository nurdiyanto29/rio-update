<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    use HasFactory;
    protected $table = 'satuan';
    protected $guarded = [];

    public function children()
    {
        return $this->hasMany(Satuan::class,'parent_id');
    }
    public function parent()
    {
        return $this->belongsTo(Satuan::class,'parent_id');
    }
}
