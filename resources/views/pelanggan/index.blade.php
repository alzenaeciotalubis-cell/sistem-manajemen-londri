@extends('layouts.app')

@section('title', 'Data Pelanggan')

@section('page-title', 'Data Pelanggan')

@section('content')

<div class="box">

    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">

        <h2>👥 Data Pelanggan</h2>

        <a href="{{ route('pelanggan.create') }}" class="btn">

            + Tambah Pelanggan

        </a>

    </div>

    @if(session('success'))

        <div style="background:#d1fae5;color:#065f46;padding:12px;border-radius:8px;margin-bottom:15px;">

            {{ session('success') }}

        </div>

    @endif

    <table>

        <thead>

            <tr>

                <th>No</th>

                <th>Nama</th>

                <th>No HP</th>

                <th>Alamat</th>

                <th>Aksi</th>

            </tr>

        </thead>

        <tbody>

        @forelse($pelanggan as $item)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $item->nama }}</td>

                <td>{{ $item->no_hp }}</td>

                <td>{{ $item->alamat }}</td>

                <td>

                    <a href="{{ route('pelanggan.edit',$item->id) }}" class="btn">

                        Edit

                    </a>

                    <form action="{{ route('pelanggan.destroy',$item->id) }}"

                          method="POST"

                          style="display:inline;">

                        @csrf

                        @method('DELETE')

                        <button class="btn"

                                onclick="return confirm('Yakin ingin menghapus data ini?')">

                            Hapus

                        </button>

                    </form>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="5" style="text-align:center;">

                    Data pelanggan belum ada.

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection
