<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan; // Hubungkan ke model Laporan

class LaporanController extends Controller
{
    public function index()
    {
        // Ambil semua data laporan dari database
        $laporan = Laporan::latest()->get();

        // Kirim data ke view laporan.blade.php
        return view('laporan', compact('laporan'));
    }
}
