<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMPersonilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_personil', function (Blueprint $table) {
            $table->bigIncrements('id_personil');
            $table->string('no_kta')->nullable();
            $table->string('no_berkas')->nullable();
            $table->string('nama')->nullable();
            $table->string('jenis_tenaga')->nullable();
            $table->string('kelahiran')->nullable();
            $table->string('no_ktp')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('kebangsaan')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('agama')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kode_provinsi')->nullable();
            $table->string('kode_kabupaten')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('layanan_1')->nullable();
            $table->string('layanan_2')->nullable();
            $table->string('sublayanan_1')->nullable();
            $table->string('sublayanan_2')->nullable();
            $table->string('sublayanan_3')->nullable();
            $table->string('sublayanan_4')->nullable();
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
        Schema::dropIfExists('m_personil');
    }
}
