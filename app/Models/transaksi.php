<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $guarded = ['$id'];

    public function detail_transaksi() 
    {
        return $this->hasOne(detail_transaksi::class);
    
    }
    public function pelanggan()
    {
        return $this->belongsTo(pelanggan::class);
    }
}
