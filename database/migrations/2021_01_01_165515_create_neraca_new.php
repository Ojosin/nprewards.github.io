<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNeracaNew extends Migration
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
            $table->string('no_berkas')->nullable();
            $table->string('no_kta')->nullable();
            $table->integer('tahun_aktv_sblm')->nullable();
            $table->integer('tahun_aktv_sudah')->nullable();
            $table->integer('kasbank_aktv_sblm')->nullable();
            $table->integer('kasbank_aktv_sudah')->nullable();
            $table->integer('piutang_ush_aktv_sblm')->nullable();
            $table->integer('piutang_ush_aktv_sudah')->nullable();
            $table->integer('persediaan_aktv_sblm')->nullable();
            $table->integer('persediaan_aktv_sudah')->nullable();
            $table->integer('piutang_pjk_aktv_sblm')->nullable();
            $table->integer('piutang_pjk_aktv_sudah')->nullable();
            $table->integer('biaya_byr_mk_aktv_sblm')->nullable();
            $table->integer('biaya_byr_mk_aktv_sudah')->nullable();
            $table->integer('pkrjaan_dlm_prs_aktv_sblm')->nullable();
            $table->integer('pkrjaan_dlm_prs_aktv_sudah')->nullable();
            $table->integer('jml_aktv_lncr_aktv_sblm')->nullable();
            $table->integer('jml_aktv_lncr_aktv_sudah')->nullable();
            $table->integer('prltan_proyek_aktv_sblm')->nullable();
            $table->integer('prltan_proyek_aktv_sudah')->nullable();
            $table->integer('inventaris_kntr_aktv_sblm')->nullable();
            $table->integer('inventaris_kntr_aktv_sudah')->nullable();
            $table->integer('perltan_kntr_aktv_sblm')->nullable();
            $table->integer('perltan_kntr_aktv_sudah')->nullable();
            $table->integer('akumlsi_aktv_sblm')->nullable();
            $table->integer('akumlsi_aktv_sudah')->nullable();
            $table->integer('jml_aktv_ttp_sblm')->nullable();
            $table->integer('jml_aktv_ttp_sudah')->nullable();
            $table->integer('aktv_lainya_sblm')->nullable();
            $table->integer('aktv_lainya_sudah')->nullable();
            $table->integer('total_aktv_sblm')->nullable();
            $table->integer('total_aktv_sudah')->nullable();
            $table->integer('tahun_kwjb_sblm')->nullable();
            $table->integer('tahun_kwjb_sudah')->nullable();
            $table->integer('utang_bank_sblm')->nullable();
            $table->integer('utang_bank_sudah')->nullable();
            $table->integer('uang_muka_sblm')->nullable();
            $table->integer('uang_muka_sudah')->nullable();
            $table->integer('utang_pjk_sblm')->nullable();
            $table->integer('utang_pjk_sudah')->nullable();
            $table->integer('biaya_msh_hrs_byr_sblm')->nullable();
            $table->integer('biaya_msh_hrs_byr_sudah')->nullable();
            $table->integer('utng_jngka_pjg_jth_tmp_sblm')->nullable();
            $table->integer('utng_jngka_pjg_jth_tmp_sudah')->nullable();
            $table->integer('utang_lainya_sblm')->nullable();
            $table->integer('utang_lainya_sudah')->nullable();
            $table->integer('jml_kwjbn_lncar_sblm')->nullable();
            $table->integer('jml_kwjbn_lncar_sudah')->nullable();
            $table->integer('utng_bank_jngka_pjg_sblm')->nullable();
            $table->integer('utng_bank_jngka_pjg_sudah')->nullable();
            $table->integer('utng_jngka_pjg_lainya_sblm')->nullable();
            $table->integer('utng_jngka_pjg_lainya_sudah')->nullable();
            $table->integer('modal_disetor_sblm')->nullable();
            $table->integer('modal_disetor_sudah')->nullable();
            $table->integer('slsih_rvluasi_aktv_ttp_sblm')->nullable();
            $table->integer('slsih_rvluasi_aktv_ttp_sudah')->nullable();
            $table->integer('laba_ditahan_sblm')->nullable();
            $table->integer('laba_ditahan_sudah')->nullable();
            $table->integer('jml_modal_sblm')->nullable();
            $table->integer('jml_modal_sudah')->nullable();
            $table->integer('total_kwjban_modal_sblm')->nullable();
            $table->integer('total_kwjban_modal_sudah')->nullable();
            $table->integer('created_by')->nullable()->nullable();
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
