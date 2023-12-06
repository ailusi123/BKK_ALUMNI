<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lamaran', function (Blueprint $table) {
            $table->id();
            // $table->increments('idlamaran');
            $table->string('nis');
            $table->string('nama');
            $table->enum('jk',['Laki-Laki','Perempuan']);
            $table->string('jurusan');
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('telepon');
            $table->year('tahun_ajaran');
            $table->string('foto');
            // $table->unsignedBigInteger('id_lowongan');
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
        Schema::dropIfExists('lamaran');
    }
};
