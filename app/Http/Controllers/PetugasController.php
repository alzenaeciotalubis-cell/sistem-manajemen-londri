<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasController extends Controller

{

    public function index()

    {

        $data_petugas = [];

        return view('petugas.index', compact('data_petugas'));

    }

    public function store(Request $request)

    {

        return redirect()->route('petugas.index')

            ->with('sukses', 'Data petugas berhasil ditambahkan.');

    }

    public function destroy($id)

    {

        return redirect()->route('petugas.index')

            ->with('sukses', 'Data petugas berhasil dihapus.');

    }

}
