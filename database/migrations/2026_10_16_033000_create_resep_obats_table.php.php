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
    Schema::create('resep_obat', function (Blueprint $table) {
        $table->id();

        $table->foreignId('konsultasi_id')
            ->constrained('konsultasi')
            ->cascadeOnDelete();

        $table->string('nama_obat');
        $table->string('dosis');
        $table->string('aturan_pakai');
        $table->integer('jumlah');
        $table->text('catatan')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resep_obats');
    }
};
