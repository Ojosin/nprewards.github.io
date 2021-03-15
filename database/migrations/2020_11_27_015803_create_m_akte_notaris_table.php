<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMAkteNotarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_akte_notaris', function (Blueprint $table) {
            $table->bigIncrements('id_akte_notaris');
            $table->string('no_kta')->nullable();
            $table->string('no_berkas')->nullable();
            $table->date('tgl_pendirian')->nullable();
            $table->string('no_pendirian')->nullable();
            $table->string('notaris_pendirian')->nullable();
            $table->string('alamat_pendirian')->nullable();
            $table->string('provinsi_pendirian')->nullable();
            $table->string('kota_pendirian')->nullable();
            $table->date('tgl_menkum_pendirian')->nullable();
            $table->string('no_menkum_pendirian')->nullable();
            $table->date('tgl_pendirian_pengadilan')->nullable();
            $table->string('no_pendirian_pengadilan')->nullable();
            $table->date('tgl_pendirian_negara')->nullable();
            $table->string('no_pendirian_negara')->nullable();
            $table->date('tgl_perubahan')->nullable();
            $table->string('no_perubahan')->nullable();
            $table->string('notaris_perubahan')->nullable();
            $table->string('alamat_perubahan')->nullable();
            $table->string('provinsi_perubahan')->nullable();
            $table->string('kota_perubahan')->nullable();
            $table->date('tgl_menkum_perubahan')->nullable();
            $table->string('no_menkum_perubahan')->nullable();
            $table->date('tgl_perubahan_pengadilan')->nullable();
            $table->string('no_perubahan_pengadilan')->nullable();
            $table->date('tgl_perubahan_negara')->nullable();
            $table->string('no_perubahan_negara')->nullable();


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
        Schema::dropIfExists('m_akte_notaris');
    }
}
