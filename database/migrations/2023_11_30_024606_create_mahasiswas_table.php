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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->string('npm')->primary();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('dosen_id');
            $table->foreign('dosen_id')->references('nidn')->on('dosens')
                ->onDelete('cascade');
            $table->string('nama');
            $table->string('alamat');
            $table->enum('jenis-kelamin', ['Laki-Laki', 'Perempuan']);
            $table->date('ttl');
            $table->string('program_studi');
            $table->bigInteger('no_hp')->totalDigits(20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
