<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();

            // Menggunakan unsignedBigInteger agar tipe datanya 100% klop dengan id() tabel utama
            $table->unsignedBigInteger('pelanggan_id');
            $table->unsignedBigInteger('paket_id');

            $table->decimal('berat_kg', 5, 2);
            $table->decimal('total_harga', 10, 2);

            $table->enum('status', [
                'proses',
                'selesai',
                'diambil'
            ])->default('proses');

            $table->timestamps();

            // Deklarasi Foreign Key secara manual (Sangat minim risiko salah tipe data)
            $table->foreign('pelanggan_id')->references('id')->on('pelanggans')->onDelete('cascade');
            $table->foreign('paket_id')->references('id')->on('pakets')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
