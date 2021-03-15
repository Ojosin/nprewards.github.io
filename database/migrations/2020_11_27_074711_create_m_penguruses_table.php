<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMPengurusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_pengurus', function (Blueprint $table) {
            $table->bigIncrements('id_pengurus');
            $table->string('no_kta')->nullable();
            $table->string('no_berkas')->nullable();
            $table->string('nama')->nullable();
            $table->string('kode_jabatan')->nullable();
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
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('m_pengurus');
    }
}
