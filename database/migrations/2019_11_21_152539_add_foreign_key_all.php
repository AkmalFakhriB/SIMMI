<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyAll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parkir', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('users');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('id_parkir')->references('id_parkir')->on('parkir');
        });

        Schema::table('berita', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('users');
        });

        Schema::table('pendaftaran', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_kajian_acara')->references('id_kajian_acara')->on('kajian_acara');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
