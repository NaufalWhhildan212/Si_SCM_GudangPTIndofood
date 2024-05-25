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
        Schema::create('truk', function (Blueprint $table) {
            $table->id();
            $table->string('Id_Truk',50);
            $table->string('Merek_Truk', 20);
            $table->string('No_Polisi', 20);
            $table->string('Berat_Muatan', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('truk');
    }
};
