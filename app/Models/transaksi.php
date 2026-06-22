<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;


    protected $fillable = [
        'pelanggan_id',
        'paket_id',
        'berat_kg',
        'total_harga',
        'status'
    ];


    // Relasi ke Pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }


    // Relasi ke Paket
    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
}