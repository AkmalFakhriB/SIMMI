<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBerita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->bigIncrements('id_berita');
            $table->unsignedBigInteger('id_user');
            $table->date('post_date');
            $table->longText('post_content');
            $table->string('post_title', 50);
            $table->string('post_status', 20);
            $table->string('coment_status', 20);
            $table->string('guid', 100);
            $table->string('post_type', 20);
            $table->integer('comment_count');
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
        Schema::dropIfExists('berita');
    }
}
