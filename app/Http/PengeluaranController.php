<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengeluaranController extends Controller

{

    public function index()

    {

        return view('pengeluaran.index');

    }

    public function create()

    {

        return view('pengeluaran.create');

    }

    public function store(Request $request)

    {

        return redirect()->route('pengeluaran.index');

    }

    public function show($id)

    {

        //

    }

    public function edit($id)

    {

        //

    }

    public function update(Request $request, $id)

    {

        return redirect()->route('pengeluaran.index');

    }

    public function destroy($id)

    {

        return redirect()->route('pengeluaran.index');

    }

}
