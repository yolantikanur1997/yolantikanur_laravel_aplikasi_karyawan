<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nik')->unique();
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('pendidikan_terakhir');
            $table->string('institusi_pendidikan');
            $table->string('jurusan');
            $table->string('kewarganegaraan');
            $table->date('tanggal_masuk');
            $table->string('jenis_kelamin');
            $table->string('divisi');
            $table->string('jabatan');
            $table->string('level');
            $table->bigInteger('no_telepon');
            $table->string('status');
            $table->string('email');
            $table->string('agama');
            $table->string('golongan_darah');
            $table->longText('alamat');
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
        Schema::dropIfExists('karyawan');
    }
}
