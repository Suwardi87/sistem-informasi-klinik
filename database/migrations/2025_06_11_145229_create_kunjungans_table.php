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
        Schema::create('kunjungans', function (Blueprint $table) {
            $table->id();
             $table->uuid('uuid');
            $table->unsignedBigInteger('pasien_id')->constrained('pasiens')->onDelete('cascade');
            $table->datetime('tanggal_kunjungan');
            $table->enum('jenis_kunjungan', ['baru', 'lama']);
            $table->enum('status', ['menunggu', 'periksa', 'selesai', 'dibatalkan']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kunjungans');
    }
};
