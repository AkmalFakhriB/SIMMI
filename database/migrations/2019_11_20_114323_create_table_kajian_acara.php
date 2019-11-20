<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKajianAcara extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kajian_acara', function (Blueprint $table) {
            $table->bigIncrements('id_kajian_acara');
            $table->string('nama_kajian', 50);
            $table->date('tanggal_kajian');
            $table->time('waktu_awal');
            $table->time('waktu_akhir');
            $table->string('uraian', 250);
            $table->string('pengisi', 25);
            $table->string('penanggung_jawab', 25);
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
        Schema::dropIfExists('kajian_acara');
    }
}
