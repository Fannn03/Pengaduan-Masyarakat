<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id('id_laporan');
            $table->string('judul_laporan');
            $table->string('foto_laporan');
            $table->string('nama_pelapor');
            $table->string('username');
            $table->enum('status',[0, 1, 2]);
            $table->longText('isi_laporan');
            $table->date('tanggal_dibuat');
            $table->date('tanggal_diedit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporans');
    }
}
