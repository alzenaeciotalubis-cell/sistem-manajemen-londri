<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = Transaksi::all();
        return view('transaksi.index', compact('data'));
    }

    public function create()
    {
        return view('transaksi.create');
    }

    public function store(Request $request)
    {
        Transaksi::create($request->all());
        return redirect()->route('transaksi.index');
    }

    public function show($id)
    {
        $data = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('data'));
    }

    public function destroy($id)
    {
        Transaksi::findOrFail($id)->delete();
        return redirect()->route('transaksi.index');
    }
}
