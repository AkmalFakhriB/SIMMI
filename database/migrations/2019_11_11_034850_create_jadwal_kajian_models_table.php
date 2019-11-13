<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalKajianModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_kajian_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Hari');
            $table->string('WaktuMulai');
            $table->string('WaktuSelesai');
            $table->string('Uraian');
            $table->string('Pengisi');
            $table->string('PenanggungJawab');
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
        Schema::dropIfExists('jadwal_kajian_models');
    }
}
