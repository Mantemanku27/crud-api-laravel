<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Menjalankan Migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('sekolah');
            $table->string('kelas');
            $table->string('nis');
            $table->string('jk');
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Mengembalikan Migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('siswas');
    }

}
