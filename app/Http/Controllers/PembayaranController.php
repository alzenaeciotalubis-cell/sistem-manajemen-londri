<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $data_pembayaran = [];

        return view('pembayaran.index', compact('data_pembayaran'));
    }

    public function create()
    {
        return view('pembayaran.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('pembayaran.index')
            ->with('sukses', 'Data pembayaran berhasil disimpan.');
    }

    public function destroy($id)
    {
        return redirect()->route('pembayaran.index')
            ->with('sukses', 'Data pembayaran berhasil dihapus.');
    }
}
