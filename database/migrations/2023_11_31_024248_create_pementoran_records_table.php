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
            $table->foreignId('mahasiswa_id')->constrained()->cascadeOnDelete();
            $table->foreignId('dosen_id')->constrained()->cascadeOnDelete();
            $table->string('semester');
            $table->string('jenis_pertemuan');
            $table->boolean('ip_mahasiswa');
            $table->boolean('ipk_mahasiswa');
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
