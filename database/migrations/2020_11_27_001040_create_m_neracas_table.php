<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMNeracasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_neraca', function (Blueprint $table) {
            $table->bigIncrements('id_neraca');
            $table->string('no_kta')->nullable();
            $table->string('no_berkas')->nullable();
            $table->integer('tahun')->nullable();
            $table->integer('kas_bank')->nullable();
            $table->integer('piutang_usaha')->nullable();
            $table->integer('persediaan')->nullable();
            $table->integer('piutang_pajak')->nullable();
            $table->integer('biaya_dibayar_dimuka')->nullable();
            $table->integer('pekerjaan_dlm_proses')->nullable();
            $table->integer('jml_aktiva_lancar')->nullable();
            $table->integer('peralatan_proyek')->nullable();
            $table->integer('inventaris_kantor')->nullable();
            $table->integer('peralatan_kantor')->nullable();
            $table->integer('akumulasi_penyusutan')->nullable();
            $table->integer('jml_aktiva_tetap')->nullable();
            $table->integer('aktiva_lainnya')->nullable();
            $table->integer('total_aktiva_lancar')->nullable();
            $table->integer('utang_bank')->nullable();
            $table->integer('uang_muka')->nullable();
            $table->integer('utang_pajak')->nullable();
            $table->integer('utang_jangka_panjang_jt')->nullable();
            $table->integer('utang_lainnya')->nullable();
            $table->integer('jml_kewajiban_lancar')->nullable();
            $table->integer('utang_jangka_panjang')->nullable();
            $table->integer('jml_kewajiban_jangka_pj')->nullable();
            $table->integer('modal_disetor')->nullable();
            $table->integer('laba_ditahan')->nullable();
            $table->integer('jml_modal')->nullable();
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
        Schema::dropIfExists('m_neraca');
    }
}
