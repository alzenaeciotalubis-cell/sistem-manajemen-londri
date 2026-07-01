<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;

    // Mengizinkan kolom-kolom ini diisi
    protected $fillable = ['nama', 'nominal', 'tanggal'];
}
