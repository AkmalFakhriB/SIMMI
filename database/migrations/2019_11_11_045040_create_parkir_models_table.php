<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkirModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkir_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name', 50);
            $table->char('NoKTP', 16);
            $table->string('NoHP', 15);
            $table->string('NoPol', 10);
            $table->char('StatusValidasi', 1);
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
        Schema::dropIfExists('parkir_models');
    }
}
