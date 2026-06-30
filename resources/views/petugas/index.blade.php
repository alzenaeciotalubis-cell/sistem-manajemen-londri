@extends('layouts.app')

@section('title','Data Petugas')

@section('page-title','Data Petugas')

@section('content')

@if(session('sukses'))

<div style="background:#d4edda;color:#155724;padding:15px;border-radius:10px;margin-bottom:20px;">

    🎉 {{ session('sukses') }}

</div>

@endif

<div class="box">

    <h2 style="margin-bottom:20px;">👨‍💼 Data Karyawan & Petugas</h2>

    <table>

        <thead>

            <tr>

                <th>No</th>

                <th>Nama Lengkap</th>

                <th>Username</th>

                <th>No. HP</th>

                <th>Role</th>

                <th>Aksi</th>

            </tr>

        </thead>

        <tbody>

        @forelse($data_petugas as $key => $p)

        <tr>

            <td>{{ $key+1 }}</td>

            <td>{{ $p->nama_lengkap }}</td>

            <td>{{ $p->username }}</td>

            <td>{{ $p->no_hp }}</td>

            <td>

                @if($p->role=='admin')

                    <span class="status proses">Admin</span>

                @else

                    <span class="status selesai">Kasir</span>

                @endif

            </td>

            <td>

                <form action="{{ route('petugas.destroy',$p->id) }}"

                      method="POST"

                      onsubmit="return confirm('Hapus petugas ini?')">

                    @csrf

                    @method('DELETE')

                    <button class="btn">

                        Hapus

                    </button>

                </form>

            </td>

        </tr>

        @empty

        <tr>

            <td colspan="6" style="text-align:center;">

                Belum ada data petugas.

            </td>

        </tr>

        @endforelse

        </tbody>

    </table>

</div>

<div class="box">

    <h2>➕ Tambah Petugas Baru</h2>

    <form action="{{ route('petugas.store') }}" method="POST">

        @csrf

        <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:20px;">

            <div>

                <label>Nama Lengkap</label>

                <input type="text" name="nama_lengkap" class="form-control" required>

            </div>

            <div>

                <label>Username</label>

                <input type="text" name="username" class="form-control" required>

            </div>

            <div>

                <label>No HP</label>

                <input type="text" name="no_hp" class="form-control" required>

            </div>

            <div>

                <label>Role</label>

                <select name="role" class="form-control">

                    <option value="kasir">Kasir</option>

                    <option value="admin">Admin</option>

                </select>

            </div>

        </div>

        <button type="submit" class="btn" style="margin-top:20px;">

            💾 Simpan Data

        </button>

    </form>

</div>

@endsection
