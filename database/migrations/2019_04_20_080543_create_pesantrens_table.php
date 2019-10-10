<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesantrensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesantrens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('pimpinan');
            $table->string('no_telp');
            $table->string('ormas');
            $table->text('kurikulum');
            $table->text('fasilitas');
            $table->text('alamat');
            $table->double('longitude');
            $table->string('latitude');
            $table->string('foto');
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
        Schema::dropIfExists('pesantrens');
    }
}
