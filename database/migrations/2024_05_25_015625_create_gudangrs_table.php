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
        Schema::create('gudang', function (Blueprint $table) {
            $table->id();
            $table->string('Id_Gudang',50);
            $table->string('Jenis_Gudang', 20);
            $table->string('Alamat_Gudang', 20);
            $table->string('Harga_Barang', 50);
            $table->string('Id_StokBarang', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gudang');
    }
};
