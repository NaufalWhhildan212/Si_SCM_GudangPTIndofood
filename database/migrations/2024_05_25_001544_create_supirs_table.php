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
        Schema::create('supir', function (Blueprint $table) {
            $table->id();
            $table->string('Id_Supir',50);
            $table->string('Nama_Supir', 20);
            $table->string('Alamat', 20);
            $table->string('No_Telepon', 50);
            $table->string('Id_Pegawai', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supir');
    }
};
