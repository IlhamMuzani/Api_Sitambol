<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBengkelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bengkels', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('kelurahan_id');
            $table->foreign('kelurahan_id')->references('id')->on('kelurahans');
            $table->string('nama');
            $table->string('kategori');
            $table->string('jadwal');
            $table->string('keterangan');
            $table->string('latitude');
            $table->string('longitute');
            $table->string('image');
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
        Schema::dropIfExists('bengkels');
    }
}
