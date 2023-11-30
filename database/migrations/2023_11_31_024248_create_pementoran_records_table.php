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
        Schema::create('pementoran_records', function (Blueprint $table) {
            $table->id();
            $table->string('mahasiswa_npm');
            $table->foreign('mahasiswa_npm')->references('npm')->on('mahasiswas')
                ->onDelete('cascade');
            $table->string('dosen_nidn');
            $table->foreign('dosen_nidn')->references('nidn')->on('dosens')
                ->onDelete('cascade');
            $table->enum('semester', ['Ganjil', 'Genap', 'Antara']);
            $table->enum('jenis_pertemuan', ['Pertemuan Awal', 'Pertemuan Tengah', 'Pertemuan Akhir']);
            $table->decimal('ip_mahasiswa', 4, 2);
            $table->decimal('ipk_mahasiswa', 4, 2);
            $table->string('permasalahan');
            $table->string('catatan_tindak_lanjut');
            // $table->string('tanda_tangan_dosen');
            // $table->string('tanda_tangan_mahasiswa');
            $table->enum('status', ['PENDING', 'APPROVED', 'REJECTED'])->default('PENDING');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pementoran_records');
    }
};
