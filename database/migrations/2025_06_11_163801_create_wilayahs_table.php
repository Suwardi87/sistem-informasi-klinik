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
        Schema::create('wilayahs', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->unsignedBigInteger('provinsi_id')->index()->nullable();
            $table->foreign('provinsi_id')->references('id')->on('provinsis')->onDelete('cascade');
            $table->unsignedBigInteger('kabupaten_id')->index()->nullable();
            $table->foreign('kabupaten_id')->references('id')->on('kabupatens')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wilayahs');
    }
};
