<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paket;

class PaketController extends Controller

{

    public function index()

    {

        $pakets = Paket::latest()->get();

        return view('paket.index', compact('pakets'));

    }

    public function create()

    {

        return view('paket.create');

    }

    public function store(Request $request)

    {

        $request->validate([

            'nama_paket' => 'required',

            'harga' => 'required|numeric',

        ]);

        Paket::create($request->all());

        return redirect()->route('paket.index')

            ->with('success', 'Paket berhasil ditambahkan');

    }

    public function show($id)

    {

        $paket = Paket::findOrFail($id);

        return view('paket.show', compact('paket'));

    }

    public function edit($id)

    {

        $paket = Paket::findOrFail($id);

        return view('paket.edit', compact('paket'));

    }

    public function update(Request $request, $id)

    {

        $request->validate([

            'nama_paket' => 'required',

            'harga' => 'required|numeric',

        ]);

        $paket = Paket::findOrFail($id);

        $paket->update($request->all());

        return redirect()->route('paket.index')

            ->with('success', 'Paket berhasil diperbarui');

    }

    public function destroy($id)

    {

        $paket = Paket::findOrFail($id);

        $paket->delete();

        return redirect()->route('paket.index')

            ->with('success', 'Paket berhasil dihapus');

    }

}
