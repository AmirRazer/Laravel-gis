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
        Schema::table('spots', function (Blueprint $table) {
            $table->unsignedBigInteger('kecamatan_id')->nullable();
            $table->unsignedBigInteger('kategori_id')->nullable();
            $table->foreign('kecamatan_id')->references('id')->on('kecamatan')->onDelete('cascade');
            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('spots', function (Blueprint $table) {
            //
        });
    }
};
