<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id('no_pengaduan');
            $table->string('jenis_pengaduan');
            $table->integer('no_anggota');
            $table->string('nama_anggota');
            $table->date('tgl_pengaduan');
            $table->text('aduan');
            $table->string('bukti_aduan');
            $table->string('status_aduan');
            $table->string('id_anggota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan');
    }
};
