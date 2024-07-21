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
            // Menambahkan kolom detail_kategori_id
            $table->unsignedBigInteger('detail_kategori_id')->nullable()->after('kategori_id');
            
            // Menambahkan foreign key (opsional, jika Anda memiliki tabel detail_kategori)
            $table->foreign('detail_kategori_id')->references('id')->on('detail_kategoris')->onDelete('set null');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('spots', function (Blueprint $table) {
             // Menghapus foreign key terlebih dahulu jika ada
            $table->dropForeign(['detail_kategori_id']);
            
            // Menghapus kolom detail_kategori_id
            $table->dropColumn('detail_kategori_id');
        });
       
    }
};
