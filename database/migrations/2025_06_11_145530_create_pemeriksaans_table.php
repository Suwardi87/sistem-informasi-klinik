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
        Schema::create('pemeriksaans', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->unsignedBigInteger('kunjungan_id')->constrained('kunjungans')->onDelete('cascade');
            $table->unsignedBigInteger('dokter_id')->constrained('pegawais')->onDelete('cascade');
            $table->text('keluhan');
            $table->text('diagnosa');
            $table->text('catatan')->nullable();
            $table->dateTime('tanggal_periksa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemeriksaans');
    }
};
