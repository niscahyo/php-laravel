<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wargas', function (Blueprint $table) {
            $table->id();
            $table->string('NIK')->unique();
            $table->string('nama');
            $table->date('ttl');
            $table->string('alamat');
            $table->string('gol_darah');
            $table->string('agama');
            $table->string('status');
            $table->string('pekerjaan');
            $table->string('warga_negara');
            $table->string('berlaku');
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
        Schema::dropIfExists('wargas');
    }
}