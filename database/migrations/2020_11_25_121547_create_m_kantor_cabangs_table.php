<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMKantorCabangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_kantor_cabang', function (Blueprint $table) {
            $table->bigIncrements('id_cabang');
            $table->string('no_kta')->nullable();
            $table->string('no_berkas')->nullable();
            // $table->foreign('kode_anggota')->references('kode_anggota')->on('m_data_administrasi');
            $table->string('jenis_kantor')->nullable();
            $table->text('alamat')->nullable();
            $table->string('kode_provinsi')->nullable();
            $table->string('kode_kabupaten')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('telepon')->nullable();
            $table->string('fax')->nullable();
            $table->string('kapasitas')->nullable();
            $table->string('luas')->nullable();
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
        Schema::dropIfExists('m_kantor_cabangs');
    }
}
