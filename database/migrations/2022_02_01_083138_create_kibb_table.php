<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKIBBTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kibb', function (Blueprint $table) {
            $table->increments('id_kibb');
            $table->integer('barang_id');
            $table->string('merk');
            $table->string('rangka');
            $table->string('mesin');
            $table->string('polisi');
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
        Schema::dropIfExists('kibb');
    }
}
