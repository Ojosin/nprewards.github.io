<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMPengalamanBusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_pengalaman_bu', function (Blueprint $table) {
            $table->bigIncrements('id_pengalaman_bu');
            $table->string('no_kta')->nullable();
            $table->string('no_berkas')->nullable();
            $table->string('kode_sb')->nullable();
            $table->string('tahun')->nullable();
            $table->string('nama_paket')->nullable();
            $table->string('pemberi_tugas')->nullable();
            $table->string('deskripsi')->nullable();
            $table->date('tgl_kontrak')->nullable();
            $table->date('tgl_mulai')->nullable();
            $table->date('tgl_selesai')->nullable();
            $table->string('nomor_kontrak')->nullable();
            $table->string('utama')->nullable();
            $table->string('nilai_kontrak')->nullable();
            $table->string('bobot')->nullable();
            $table->string('nilai_kontrak_dibobotkan')->nullable();
            $table->string('no_berita_acara')->nullable();
            $table->date('tgl_berita_acara')->nullable();
            $table->string('lokasi_proyek')->nullable();
            $table->string('jumlah_month')->nullable();
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
        Schema::dropIfExists('m_pengalaman_bu');
    }
}
