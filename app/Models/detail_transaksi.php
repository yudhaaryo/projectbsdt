<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_transaksi extends Model
{
    use HasFactory;

    protected $guarded = ['$id'];

    public function detail_transaksi() 
    {
        return $this->belongsTo(transaksi::class);
    
    }
    public function billing()
    {
        return $this->belongsTo(billing::class);
    }


}
