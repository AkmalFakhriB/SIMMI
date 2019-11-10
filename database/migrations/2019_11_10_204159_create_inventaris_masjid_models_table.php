<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarisMasjidModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris_masjid_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Uraian');
            $table->string('Satuan');
            $table->integer('Kuantitas');
            $table->string('Kondisi');
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
        Schema::dropIfExists('inventaris_masjid_models');
    }
}
