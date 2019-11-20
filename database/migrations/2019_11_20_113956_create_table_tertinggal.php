<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTertinggal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tertinggal', function (Blueprint $table) {
            $table->bigIncrements('id_tertinggal');
            $table->string('barang', 50);
            $table->string('lokasi', 50);
            $table->string('uraian', 250);
            $table->timestamp('ditemukan');
            $table->string('status', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tertinggal');
    }
}
