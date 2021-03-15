<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createtablenegara extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negara', function (Blueprint $table) {
            $table->bigIncrements('id_negara');
            $table->string('nama_negara')->nullable();
            $table->string('kode_iso_2')->nullable();
            $table->string('kode_iso_3')->nullable();
            $table->string('kode_internet')->nullable();
            $table->string('kode_kendaraan')->nullable();
            $table->string('kode_olimpic')->nullable();
            $table->string('kode_pbb')->nullable();
            $table->string('kode_telepon')->nullable();
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
        Schema::dropIfExists('negara');
    }
}
