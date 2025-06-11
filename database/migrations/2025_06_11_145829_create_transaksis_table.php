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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->unsignedBigInteger('kunjungan_id')->constrained('kunjungans')->onDelete('cascade');
            $table->unsignedBigInteger('kasir_id')->constrained('pegawais')->onDelete('cascade');
            $table->decimal('total_tagihan', 10, 2);
            $table->dateTime('tanggal_bayar');
            $table->enum('metode_pembayaran', ['cash', 'qris'])->nullable();
            $table->enum('status', ['lunas', 'belum'])->default('belum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
