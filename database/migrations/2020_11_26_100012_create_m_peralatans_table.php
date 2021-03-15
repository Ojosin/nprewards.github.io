<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMPeralatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_peralatan', function (Blueprint $table) {
            $table->bigIncrements('id_peralatan');
            $table->integer('jumlah')->nullable();
            $table->string('jenis')->nullable();
            $table->string('merk')->nullable();
            $table->string('no_kta')->nullable();
            $table->string('no_berkas')->nullable();
            $table->string('kapasitas')->nullable();
            $table->string('nomor')->nullable();
            $table->string('tahun')->nullable();
            $table->string('kondisi')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('harga')->nullable();
            $table->string('kepemilikan')->nullable();
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
        Schema::dropIfExists('m_peralatan');
    }
}
