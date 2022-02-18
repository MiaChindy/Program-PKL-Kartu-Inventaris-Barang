<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKIBCTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kibc', function (Blueprint $table) {
            $table->increments('id_kibc');
            $table->integer('barang_id');
            $table->string('kon_bangunan');
            $table->string('luas_lantai');
            $table->string('alamat');
            $table->string('luas');
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
        Schema::dropIfExists('kibc');
    }
}
