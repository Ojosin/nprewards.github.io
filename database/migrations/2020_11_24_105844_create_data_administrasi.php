<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataAdministrasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_data_administrasi', function (Blueprint $table) {
            $table->bigIncrements('id_data_administrasi');
            $table->uuid('no_kta')->nullable();
            $table->date('tgl_aplikasi')->nullable();
            $table->string('no_berkas')->nullable();
            $table->string('no_registrasi_buk')->nullable();
            $table->string('tahapan')->nullable();
            $table->string('no_anggota_inkindo')->nullable();
            $table->string('nama_badan_usaha')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kode_provinsi')->nullable();
            $table->string('kode_kabupaten')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('catatan')->nullable();
            $table->string('telepon')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('website')->nullable();
            $table->string('bentuk_bu')->nullable();
            $table->string('golongan_bu')->nullable();
            $table->string('kualifikasi_bu')->nullable();
            $table->string('status_sertifikasi')->nullable();
            $table->string('no_siup')->nullable();
            $table->date('tgl_siup')->nullable();
            $table->string('no_pma')->nullable();
            $table->date('tgl_pma')->nullable();
            $table->string('no_spt')->nullable();
            $table->integer('created_by')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('update_by')->nullable();
            $table->timestamp('update_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_data_adminitrasi');
    }
}
