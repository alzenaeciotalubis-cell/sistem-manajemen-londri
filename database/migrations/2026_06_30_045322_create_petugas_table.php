<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up()
{
    Schema::create('petugas', function (Blueprint $table) {
        $table->id();
        $table->string('nama_lengkap');
        $table->string('username')->unique();
        $table->string('no_hp');
        $table->enum('role', ['admin', 'kasir']);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugas');
    }
};
