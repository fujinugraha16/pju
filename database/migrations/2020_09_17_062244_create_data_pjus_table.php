<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPjusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pjus', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_masuk');
            $table->string('no_surat');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('alamat');
            $table->string('id_pelanggan');
            $table->string('ket_kerusakan');
            $table->string('ket_sdh_blm');
            $table->string('tgl_pemeliharaan');
            $table->string('pelaksana');
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
        Schema::dropIfExists('data_pjus');
    }
}
