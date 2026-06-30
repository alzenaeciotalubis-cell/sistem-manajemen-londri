<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;

class PaketController extends Controller
{
    public function index()
    {
        $data = Paket::all();
        return view('paket.index', compact('data'));
    }

    public function create()
    {
        return view('paket.create');
    }

    public function store(Request $request)
    {
        Paket::create($request->all());
        return redirect()->route('paket.index');
    }

    public function show($id)
    {
        $data = Paket::findOrFail($id);
        return view('paket.show', compact('data'));
    }

    public function edit($id)
    {
        $data = Paket::findOrFail($id);
        return view('paket.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Paket::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('paket.index');
    }

    public function destroy($id)
    {
        Paket::findOrFail($id)->delete();
        return redirect()->route('paket.index');
    }
}
