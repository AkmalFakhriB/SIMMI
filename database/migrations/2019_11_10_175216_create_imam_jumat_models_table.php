<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImamJumatModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imam_jumat_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('JumatKe');
            $table->date('Tanggal');
            $table->string('Imam');
            $table->string('Asal');
            $table->string('Muadzin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imam_jumat_models');
    }
}
