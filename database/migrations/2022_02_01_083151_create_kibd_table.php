<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKIBDTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kibd', function (Blueprint $table) {
            $table->increments('id_kibd');
            $table->integer('barang_id');
            $table->string('panjang');
            $table->string('lebar');
            $table->string('luas');
            $table->string('alamat');
            $table->string('status');
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
        Schema::dropIfExists('kibd');
    }
}
