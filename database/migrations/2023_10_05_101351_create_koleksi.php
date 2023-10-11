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
        Schema::create('koleksi', function (Blueprint $table) {
            //Muhammad Lutfi Ruhallah
            $table->integer('id',11);
            $table->string('namaKoleksi,100');
            $table->tinyinteger('jenisKoleksi');
            $table->date('createdAt');
            $table->integer('jumlahKoleksi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('koleksi', function (Blueprint $table) {
            //
        });
    }
};
