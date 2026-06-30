<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;

class PembayaranController extends Controller
{
    public function index()
    {
        $data = Pembayaran::all();
        return view('pembayaran.index', compact('data'));
    }

    public function create()
    {
        return view('pembayaran.create');
    }

    public function store(Request $request)
    {
        Pembayaran::create($request->all());
        return redirect()->route('pembayaran.index');
    }

    public function show($id)
    {
        $data = Pembayaran::findOrFail($id);
        return view('pembayaran.show', compact('data'));
    }

    public function edit($id)
    {
        $data = Pembayaran::findOrFail($id);
        return view('pembayaran.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Pembayaran::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('pembayaran.index');
    }

    public function destroy($id)
    {
        Pembayaran::findOrFail($id)->delete();
        return redirect()->route('pembayaran.index');
    }
}
