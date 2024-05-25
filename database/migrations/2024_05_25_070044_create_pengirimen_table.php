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
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->id();
            $table->string('Id_Pengiriman',50);
            $table->string('Berat_Muatan', 20);
            $table->string('Id_Truk', 20);
            $table->string('Id_Pegawai', 50);
            $table->string('Id_Barang', 50);
            $table->string('Id_Jadwal', 20);
            $table->string('Id_Rute', 50);
            $table->string('Id_Supir', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengiriman');
    }
};
