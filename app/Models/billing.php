<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class billing extends Model
{
    use HasFactory;
    protected $guarded = ['$id'];

    public function detail_transaksis()
    {
        return $this->hasOne(detail_transaksi::class);
    }
    public function komputer()
    {
        return $this->hasOne(Komputer::class);

    }
}
