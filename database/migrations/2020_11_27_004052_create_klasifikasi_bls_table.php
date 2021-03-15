<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKlasifikasiBlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_kualifikasi_bl', function (Blueprint $table) {
            $table->bigIncrements('id_kualifikasi_bl');
            $table->string('no_kta')->nullable();
            $table->string('no_berkas')->nullable();
            $table->string('kode_bl')->nullable();
            $table->string('kual')->nullable();
            $table->date('tgl_aplikasi')->nullable();
            $table->date('tgl_pemutus')->nullable();
            $table->date('tgl_terbit')->nullable();
            $table->date('tgl_berlaku')->nullable();
            $table->string('no_seri_sbu')->nullable();
            $table->date('tgl_pengirim')->nullable();
            $table->string('no_leges')->nullable();
            $table->date('tgl_leges')->nullable();
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
        Schema::dropIfExists('klasifikasi_bl');
    }
}
