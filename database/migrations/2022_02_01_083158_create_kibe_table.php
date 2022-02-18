<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKIBETable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kibe', function (Blueprint $table) {
            $table->increments('id_kibe');
            $table->integer('barang_id');
            $table->string('judul');
            $table->string('pencipta');
            $table->string('harga');
            $table->string('tahun');
            $table->integer('jumlah_B');
            $table->integer('jumlah_KB');
            $table->integer('jumlah_RB');
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
        Schema::dropIfExists('kibe');
    }
}
