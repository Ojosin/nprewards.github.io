<template>    
    <div>
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon" style="background:#0069b8;color:#fff">
                        <i class="fa fa-user">
                        </i>
                    </div>
                    <div>Buat Baru Neraca
                        <div class="page-title-subheading">Form dibawah ini adalah Neraca untuk pengajuan sertifikasi di  system SBU INKINDO.
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">

                    <button type="button" @click="store_data" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-success">
                        <i class="fa fa-business-time fa-w-20"></i> Simpan
                    </button>
                    <div class="d-inline-block dropdown">
                        <router-link class="btn btn-danger" :to="{name:'data-administrasi.detail',params:{no_berkas: $route.query.no_berkas,no_kta:$route.query.no_kta }}"><i class="fa fa-chevron-left"></i>
                            Batal
                        </router-link>
                    </div>
                </div>    

            </div>
        </div>

        <div class="tab-pane tabs-animation fade active show" id="tab-content-0" role="tabpanel">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="exampleEmail11" class="ml-1"> <h5> AKTIVA LANCAR :  </h5> </label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Tahun   <span style="color:red">*</span>
                                        </label>
                                        <input name='tahun_aktv_sblm' id="tahun_aktv_sblm" type="text"  ref="tahun_aktv_sblm"  v-model="neraca.tahun_aktv_sblm" :class="{'is-invalid':errors.tahun_aktv_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.tahun_aktv_sblm"> <div style="color:red">{{errors.tahun_aktv_sblm[0]}} </div>    </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Tahun   <span style="color:red">*</span>
                                        </label>
                                        <input name='tahun_aktv_sudah' id="tahun_aktv_sudah" type="text"  ref="tahun_aktv_sudah"  v-model="neraca.tahun_aktv_sudah" :class="{'is-invalid':errors.tahun_aktv_sudah}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.tahun_aktv_sudah"> <div style="color:red">{{errors.tahun_aktv_sudah[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Kas dan Bank  <span style="color:red">*</span></label>
                                        <input name='kasbank_aktv_sblm' id="kasbank_aktv_sblm" type="text"  v-model="neraca.kasbank_aktv_sblm"  :class="{'is-invalid':errors.kasbank_aktv_sblm}" class="form-control ml-1 number_valid" >
                                        <div  v-if="errors.kasbank_aktv_sblm"> <div style="color:red">{{errors.kasbank_aktv_sblm[0]}} </div>    </div>
                                    </div>
                                </div> 

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Kas dan Bank  <span style="color:red">*</span></label>
                                        <input name='kasbank_aktv_sudah' id="kasbank_aktv_sudah" type="text"  v-model="neraca.kasbank_aktv_sudah"  :class="{'is-invalid':errors.kasbank_aktv_sudah}" class="form-control ml-1 number_valid" >
                                        <div  v-if="errors.kasbank_aktv_sudah"> <div style="color:red">{{errors.kasbank_aktv_sudah[0]}} </div>    </div>
                                    </div>
                                </div>

                                <!-- 
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Piutang Usaha <span style="color:red">*</span></label>
                                        <input name='piutang_usaha' id="piutang_usaha" type="text" class="form-control ml-1 number_valid"  v-model="neraca.piutang_usaha" :class="{'is-invalid':errors.piutang_usaha}">
                                        <div  v-if="errors.piutang_usaha"> <div style="color:red">{{errors.piutang_usaha[0]}} </div>    </div>
                                    </div>
                                </div> -->
                            </div> 

                        

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Piutang Usaha  <span style="color:red">*</span></label>
                                        <input name='piutang_ush_aktv_sblm' id="piutang_ush_aktv_sblm" type="text"  v-model="neraca.piutang_ush_aktv_sblm"  :class="{'is-invalid':errors.piutang_ush_aktv_sblm}" class="form-control ml-1 number_valid" >
                                        <div  v-if="errors.piutang_ush_aktv_sblm"> <div style="color:red">{{errors.piutang_ush_aktv_sblm[0]}} </div>    </div>
                                    </div>
                                </div> 

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Piutang Usaha  <span style="color:red">*</span></label>
                                        <input name='piutang_ush_aktv_sudah' id="piutang_ush_aktv_sudah" type="text"  v-model="neraca.piutang_ush_aktv_sudah"  :class="{'is-invalid':errors.piutang_ush_aktv_sudah}" class="form-control ml-1 number_valid" >
                                        <div  v-if="errors.piutang_ush_aktv_sudah"> <div style="color:red">{{errors.piutang_ush_aktv_sudah[0]}} </div>    </div>
                                    </div>
                                </div>

                                <!-- 
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Piutang Usaha <span style="color:red">*</span></label>
                                        <input name='piutang_usaha' id="piutang_usaha" type="text" class="form-control ml-1 number_valid"  v-model="neraca.piutang_usaha" :class="{'is-invalid':errors.piutang_usaha}">
                                        <div  v-if="errors.piutang_usaha"> <div style="color:red">{{errors.piutang_usaha[0]}} </div>    </div>
                                    </div>
                                </div> -->
                            </div>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Persediaan  </label>
                                        <input name='persediaan_aktv_sblm' id="persediaan_aktv_sblm" v-model="neraca.persediaan_aktv_sblm"   type="text"  :class="{'is-invalid':errors.persediaan_aktv_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.persediaan_aktv_sblm"> <div style="color:red">{{errors.persediaan_aktv_sblm[0]}} </div>    </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Persediaan  </label>
                                        <input name='persediaan_aktv_sudah' id="persediaan_aktv_sudah" v-model="neraca.persediaan_aktv_sudah"   type="text"  :class="{'is-invalid':errors.persediaan_aktv_sudah}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.persediaan_aktv_sudah"> <div style="color:red">{{errors.persediaan_aktv_sudah[0]}} </div>    </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Piutang Pajak  </label>
                                        <input name='piutang_pajak' id="piutang_pajak" type="text" v-model="neraca.piutang_pajak"   :class="{'is-invalid':errors.piutang_pajak}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.piutang_pajak"> <div style="color:red">{{errors.piutang_pajak[0]}} </div>    </div>
                                    </div>
                                </div> -->
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Piutang Pajak  </label>
                                        <input name='piutang_pjk_aktv_sblm' id="piutang_pjk_aktv_sblm" v-model="neraca.piutang_pjk_aktv_sblm"   type="text"  :class="{'is-invalid':errors.piutang_pjk_aktv_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.piutang_pjk_aktv_sblm"> <div style="color:red">{{errors.piutang_pjk_aktv_sblm[0]}} </div>    </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Piutang Pajak  </label>
                                        <input name='piutang_pjk_aktv_sudah' id="piutang_pjk_aktv_sudah" v-model="neraca.piutang_pjk_aktv_sudah"   type="text"  :class="{'is-invalid':errors.piutang_pjk_aktv_sudah}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.piutang_pjk_aktv_sudah"> <div style="color:red">{{errors.piutang_pjk_aktv_sudah[0]}} </div>    </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Piutang Pajak  </label>
                                        <input name='piutang_pajak' id="piutang_pajak" type="text" v-model="neraca.piutang_pajak"   :class="{'is-invalid':errors.piutang_pajak}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.piutang_pajak"> <div style="color:red">{{errors.piutang_pajak[0]}} </div>    </div>
                                    </div>
                                </div> -->
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Biaya dibayar dimuka </label>
                                        <input name='biaya_byr_mk_aktv_sblm' id="biaya_byr_mk_aktv_sblm" v-model="neraca.biaya_byr_mk_aktv_sblm"   type="text"  :class="{'is-invalid':errors.biaya_byr_mk_aktv_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.biaya_byr_mk_aktv_sblm"> <div style="color:red">{{errors.biaya_byr_mk_aktv_sblm[0]}} </div>    </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Biaya dibayar dimuka </label>
                                        <input name='biaya_byr_mk_aktv_sudah' id="biaya_byr_mk_aktv_sudah" v-model="neraca.biaya_byr_mk_aktv_sudah"   type="text"  :class="{'is-invalid':errors.biaya_byr_mk_aktv_sudah}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.biaya_byr_mk_aktv_sudah"> <div style="color:red">{{errors.biaya_byr_mk_aktv_sudah[0]}} </div>    </div>
                                    </div>
                                </div>

                               <!--  
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Pekerjaan dalam proses  </label>
                                        <input name='pekerjaan_dlm_proses' id="pekerjaan_dlm_proses" type="text" v-model="neraca.pekerjaan_dlm_proses"   :class="{'is-invalid':errors.pekerjaan_dlm_proses}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.pekerjaan_dlm_proses"> <div style="color:red">{{errors.pekerjaan_dlm_proses[0]}} </div>    </div>
                                    </div>
                                </div> -->
                            </div>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Pekerjaan dalam proses </label>
                                        <input name='pkrjaan_dlm_prs_aktv_sblm' id="pkrjaan_dlm_prs_aktv_sblm" v-model="neraca.pkrjaan_dlm_prs_aktv_sblm"   type="text"  :class="{'is-invalid':errors.pkrjaan_dlm_prs_aktv_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.pkrjaan_dlm_prs_aktv_sblm"> <div style="color:red">{{errors.pkrjaan_dlm_prs_aktv_sblm[0]}} </div>    </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Pekerjaan dalam proses </label>
                                        <input name='pkrjaan_dlm_prs_aktv_sudah' id="pkrjaan_dlm_prs_aktv_sudah" v-model="neraca.pkrjaan_dlm_prs_aktv_sudah"   type="text"  :class="{'is-invalid':errors.pkrjaan_dlm_prs_aktv_sudah}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.pkrjaan_dlm_prs_aktv_sudah"> <div style="color:red">{{errors.pkrjaan_dlm_prs_aktv_sudah[0]}} </div>    </div>
                                    </div>
                                </div>

                               <!--  
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Pekerjaan dalam proses  </label>
                                        <input name='pekerjaan_dlm_proses' id="pekerjaan_dlm_proses" type="text" v-model="neraca.pekerjaan_dlm_proses"   :class="{'is-invalid':errors.pekerjaan_dlm_proses}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.pekerjaan_dlm_proses"> <div style="color:red">{{errors.pekerjaan_dlm_proses[0]}} </div>    </div>
                                    </div>
                                </div> -->
                            </div>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Jumlah Aktiva Lancar </label>
                                        <input name='jml_aktv_lncr_aktv_sblm' id="jml_aktv_lncr_aktv_sblm" v-model="neraca.jml_aktv_lncr_aktv_sblm"   type="text"  :class="{'is-invalid':errors.jml_aktv_lncr_aktv_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.jml_aktv_lncr_aktv_sblm"> <div style="color:red">{{errors.jml_aktv_lncr_aktv_sblm[0]}} </div>    </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Jumlah Aktiva Lancar </label>
                                        <input name='jml_aktv_lncr_aktv_sudah' id="jml_aktv_lncr_aktv_sudah" v-model="neraca.jml_aktv_lncr_aktv_sudah"   type="text"  :class="{'is-invalid':errors.jml_aktv_lncr_aktv_sudah}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.jml_aktv_lncr_aktv_sudah"> <div style="color:red">{{errors.jml_aktv_lncr_aktv_sudah[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="exampleEmail11" class="ml-1"> <h5> AKTIVA TETAP :  </h5> </label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Peralatan Proyek   <span style="color:red">*</span>
                                        </label>
                                        <input name='prltan_proyek_aktv_sblm' id="prltan_proyek_aktv_sblm" type="text"  ref="prltan_proyek_aktv_sblm"  v-model="neraca.prltan_proyek_aktv_sblm" :class="{'is-invalid':errors.prltan_proyek_aktv_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.prltan_proyek_aktv_sblm"> <div style="color:red">{{errors.prltan_proyek_aktv_sblm[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Peralatan Proyek   <span style="color:red">*</span>
                                        </label>
                                        <input name='prltan_proyek_aktv_sudah' id="prltan_proyek_aktv_sudah" type="text"  ref="prltan_proyek_aktv_sudah"  v-model="neraca.prltan_proyek_aktv_sudah" :class="{'is-invalid':errors.prltan_proyek_aktv_sudah}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.prltan_proyek_aktv_sudah"> <div style="color:red">{{errors.prltan_proyek_aktv_sudah[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Inventaris Kantor  <span style="color:red">*</span></label>
                                        <input name='inventaris_kntr_aktv_sblm' id="inventaris_kntr_aktv_sblm" type="text"  v-model="neraca.inventaris_kntr_aktv_sblm"  :class="{'is-invalid':errors.inventaris_kntr_aktv_sblm}" class="form-control ml-1 number_valid" >
                                        <div  v-if="errors.inventaris_kntr_aktv_sblm"> <div style="color:red">{{errors.inventaris_kntr_aktv_sblm[0]}} </div>    </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Inventaris Kantor  <span style="color:red">*</span></label>
                                        <input name='inventaris_kntr_aktv_sudah' id="inventaris_kntr_aktv_sudah" type="text"  v-model="neraca.inventaris_kntr_aktv_sudah"  :class="{'is-invalid':errors.inventaris_kntr_aktv_sudah}" class="form-control ml-1 number_valid" >
                                        <div  v-if="errors.inventaris_kntr_aktv_sudah"> <div style="color:red">{{errors.inventaris_kntr_aktv_sudah[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Peralatan Kantor  <span style="color:red">*</span></label>
                                        <input name='perltan_kntr_aktv_sblm' id="perltan_kntr_aktv_sblm" type="text"  v-model="neraca.perltan_kntr_aktv_sblm"  :class="{'is-invalid':errors.perltan_kntr_aktv_sblm}" class="form-control ml-1 number_valid" >
                                        <div  v-if="errors.perltan_kntr_aktv_sblm"> <div style="color:red">{{errors.perltan_kntr_aktv_sblm[0]}} </div>    </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Peralatan Kantor  <span style="color:red">*</span></label>
                                        <input name='perltan_kntr_aktv_sudah' id="perltan_kntr_aktv_sudah" type="text"  v-model="neraca.perltan_kntr_aktv_sudah"  :class="{'is-invalid':errors.perltan_kntr_aktv_sudah}" class="form-control ml-1 number_valid" >
                                        <div  v-if="errors.perltan_kntr_aktv_sudah"> <div style="color:red">{{errors.perltan_kntr_aktv_sudah[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Akumulasi Penyusutan  </label>
                                        <input name='akumlsi_aktv_sblm' id="akumlsi_aktv_sblm" v-model="neraca.akumlsi_aktv_sblm"   type="text"  :class="{'is-invalid':errors.akumlsi_aktv_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.akumlsi_aktv_sblm"> <div style="color:red">{{errors.akumlsi_aktv_sblm[0]}} </div>    </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Akumulasi Penyusutan  </label>
                                        <input name='akumlsi_aktv_sudah' id="akumlsi_aktv_sudah" v-model="neraca.akumlsi_aktv_sudah"   type="text"  :class="{'is-invalid':errors.akumlsi_aktv_sudah}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.akumlsi_aktv_sudah"> <div style="color:red">{{errors.akumlsi_aktv_sudah[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Jumlah Aktiva Tetap </label>
                                        <input name='jml_aktv_ttp_sblm' id="jml_aktv_ttp_sblm" v-model="neraca.jml_aktv_ttp_sblm"   type="text"  :class="{'is-invalid':errors.jml_aktv_ttp_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.jml_aktv_ttp_sblm"> <div style="color:red">{{errors.jml_aktv_ttp_sblm[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Jumlah Aktiva Tetap </label>
                                        <input name='jml_aktv_ttp_sudah' id="jml_aktv_ttp_sudah" v-model="neraca.jml_aktv_ttp_sudah"   type="text"  :class="{'is-invalid':errors.jml_aktv_ttp_sudah}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.jml_aktv_ttp_sudah"> <div style="color:red">{{errors.jml_aktv_ttp_sudah[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="exampleEmail11" class="ml-1"> <h5> AKTIVA LAINNYA :  </h5> </label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Aktiva lainnya   <span style="color:red">*</span>
                                        </label>
                                        <input name='aktv_lainya_sblm' id="aktv_lainya_sblm" type="text"  ref="aktv_lainya_sblm"  v-model="neraca.aktv_lainya_sblm" :class="{'is-invalid':errors.aktv_lainya_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.aktv_lainya_sblm"> <div style="color:red">{{errors.aktv_lainya_sblm[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Aktiva lainnya   <span style="color:red">*</span>
                                        </label>
                                        <input name='aktv_lainya_sudah' id="aktv_lainya_sudah" type="text"  ref="aktv_lainya_sudah"  v-model="neraca.aktv_lainya_sudah" :class="{'is-invalid':errors.aktv_lainya_sudah}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.aktv_lainya_sudah"> <div style="color:red">{{errors.aktv_lainya_sudah[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Total Aktiva Lancar   <span style="color:red">*</span>
                                        </label>
                                        <input name='total_aktv_sblm' id="total_aktv_sblm" type="text"  ref="total_aktv_sblm"  v-model="neraca.total_aktv_sblm" :class="{'is-invalid':errors.total_aktv_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.total_aktv_sblm"> <div style="color:red">{{errors.total_aktv_sblm[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Total Aktiva Lancar   <span style="color:red">*</span>
                                        </label>
                                        <input name='total_aktv_sudah' id="total_aktv_sudah" type="text"  ref="total_aktv_sudah"  v-model="neraca.total_aktv_sudah" :class="{'is-invalid':errors.total_aktv_sudah}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.total_aktv_sudah"> <div style="color:red">{{errors.total_aktv_sudah[0]}} </div>    </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="exampleEmail11" class="ml-1"> <h5> KEWAJIBAN LANCAR :  </h5> </label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Tahun   <span style="color:red">*</span>
                                        </label>
                                        <input name='tahun_kwjb_sblm' id="tahun_kwjb_sblm" type="text"  ref="tahun_kwjb_sblm"  v-model="neraca.tahun_kwjb_sblm" :class="{'is-invalid':errors.tahun_kwjb_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.tahun_kwjb_sblm"> <div style="color:red">{{errors.tahun_kwjb_sblm[0]}} </div>    </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Tahun   <span style="color:red">*</span>
                                        </label>
                                        <input name='tahun_kwjb_sudah' id="tahun_kwjb_sudah" type="text"  ref="tahun_kwjb_sudah"  v-model="neraca.tahun_kwjb_sudah" :class="{'is-invalid':errors.tahun_kwjb_sudah}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.tahun_kwjb_sudah"> <div style="color:red">{{errors.tahun_kwjb_sudah[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Utang Bank  <span style="color:red">*</span></label>
                                        <input name='utang_bank_sblm' id="utang_bank_sblm" type="text"  v-model="neraca.utang_bank_sblm"  :class="{'is-invalid':errors.utang_bank_sblm}" class="form-control ml-1 number_valid" >
                                        <div  v-if="errors.utang_bank_sblm"> <div style="color:red">{{errors.utang_bank_sblm[0]}} </div>    </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Utang Bank  <span style="color:red">*</span></label>
                                        <input name='utang_bank_sudah' id="utang_bank_sudah" type="text"  v-model="neraca.utang_bank_sudah"  :class="{'is-invalid':errors.utang_bank_sudah}" class="form-control ml-1 number_valid" >
                                        <div  v-if="errors.utang_bank_sudah"> <div style="color:red">{{errors.utang_bank_sudah[0]}} </div>    </div>
                                    </div>
                                </div>
<!-- 
                                
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Uang Muka <span style="color:red">*</span></label>
                                        <input name='uang_muka' id="uang_muka" type="text" class="form-control ml-1 number_valid"  v-model="neraca.uang_muka" :class="{'is-invalid':errors.uang_muka}">
                                        <div  v-if="errors.uang_muka"> <div style="color:red">{{errors.uang_muka[0]}} </div>    </div>
                                    </div>
                                </div> -->
                            </div>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Uang Muka  </label>
                                        <input name='uang_muka_sblm' id="uang_muka_sblm" v-model="neraca.uang_muka_sblm"   type="text"  :class="{'is-invalid':errors.uang_muka_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.uang_muka_sblm"> <div style="color:red">{{errors.uang_muka_sblm[0]}} </div>    </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Uang Muka  </label>
                                        <input name='uang_muka_sudah' id="uang_muka_sudah" v-model="neraca.uang_muka_sudah"   type="text"  :class="{'is-invalid':errors.uang_muka_sudah}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.uang_muka_sudah"> <div style="color:red">{{errors.uang_muka_sudah[0]}} </div>    </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Utang Pajak   </label>
                                        <input name='utang_pjk_sblm' id="utang_pjk_sblm" v-model="neraca.utang_pjk_sblm"   type="text"  :class="{'is-invalid':errors.utang_pjk_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.utang_pjk_sblm"> <div style="color:red">{{errors.utang_pjk_sblm[0]}} </div>    </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Utang Pajak   </label>
                                        <input name='utang_pjk_sudah' id="utang_pjk_sudah" v-model="neraca.utang_pjk_sudah"   type="text"  :class="{'is-invalid':errors.utang_pjk_sudah}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.utang_pjk_sudah"> <div style="color:red">{{errors.utang_pjk_sudah[0]}} </div>    </div>
                                    </div>
                                </div>

                                <!---
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Biaya masih harus dibayar  </label>
                                        <input name='biaya_msh_dibayar' id="biaya_msh_dibayar" type="text" v-model="neraca.biaya_msh_dibayar"   :class="{'is-invalid':errors.biaya_msh_dibayar}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.biaya_msh_dibayar"> <div style="color:red">{{errors.biaya_msh_dibayar[0]}} </div>    </div>
                                    </div>
                                </div> -->
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Biaya masih harus dibayar    </label>
                                        <input name='biaya_msh_hrs_byr_sblm' id="biaya_msh_hrs_byr_sblm" v-model="neraca.biaya_msh_hrs_byr_sblm"   type="text"  :class="{'is-invalid':errors.biaya_msh_hrs_byr_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.biaya_msh_hrs_byr_sblm"> <div style="color:red">{{errors.biaya_msh_hrs_byr_sblm[0]}} </div>    </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Biaya masih harus dibayar    </label>
                                        <input name='biaya_msh_hrs_byr_sudah' id="biaya_msh_hrs_byr_sudah" v-model="neraca.biaya_msh_hrs_byr_sudah"   type="text"  :class="{'is-invalid':errors.biaya_msh_hrs_byr_sudah}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.biaya_msh_hrs_byr_sudah"> <div style="color:red">{{errors.biaya_msh_hrs_byr_sudah[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Utang Jangka Panjang Jatuh Tempo </label>
                                        <input name='utng_jngka_pjg_jth_tmp_sblm' id="utng_jngka_pjg_jth_tmp_sblm" v-model="neraca.utng_jngka_pjg_jth_tmp_sblm"   type="text"  :class="{'is-invalid':errors.utng_jngka_pjg_jth_tmp_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.utng_jngka_pjg_jth_tmp_sblm"> <div style="color:red">{{errors.utng_jngka_pjg_jth_tmp_sblm[0]}} </div>    </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang">  Utang Jangka Panjang Jatuh Tempo </label>
                                        <input name='utng_jngka_pjg_jth_tmp_sudah' id="utng_jngka_pjg_jth_tmp_sudah" type="text" v-model="neraca.utng_jngka_pjg_jth_tmp_sudah"   :class="{'is-invalid':errors.utng_jngka_pjg_jth_tmp_sudah}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.utng_jngka_pjg_jth_tmp_sudah"> <div style="color:red">{{errors.utng_jngka_pjg_jth_tmp_sudah[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Utang Lainnya </label>
                                        <input name='utang_lainya_sblm' id="utang_lainya_sblm" v-model="neraca.utang_lainya_sblm"   type="text"  :class="{'is-invalid':errors.utang_lainya_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.utang_lainya_sblm"> <div style="color:red">{{errors.utang_lainya_sblm[0]}} </div>    </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang">  Utang Lainnya  </label>
                                        <input name='utang_lainya_sudah' id="utang_lainya_sudah" type="text" v-model="neraca.utang_lainya_sudah"   :class="{'is-invalid':errors.utang_lainya_sudah}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.utang_lainya_sudah"> <div style="color:red">{{errors.utang_lainya_sudah[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Jumlah Kewajiban Lancar </label>
                                        <input name='jml_kwjbn_lncar_sblm' id="jml_kwjbn_lncar_sblm" v-model="neraca.jml_kwjbn_lncar_sblm"   type="text"  :class="{'is-invalid':errors.jml_kwjbn_lncar_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.jml_kwjbn_lncar_sblm"> <div style="color:red">{{errors.jml_kwjbn_lncar_sblm[0]}} </div>    </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Jumlah Kewajiban Lancar </label>
                                        <input name='jml_kwjbn_lncar_sudah' id="jml_kwjbn_lncar_sudah" v-model="neraca.jml_kwjbn_lncar_sudah"   type="text"  :class="{'is-invalid':errors.jml_kwjbn_lncar_sudah}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.jml_kwjbn_lncar_sudah"> <div style="color:red">{{errors.jml_kwjbn_lncar_sudah[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="exampleEmail11" class="ml-1"> <h5> Kewajiban Jangka Panjang :  </h5> </label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Utang Bank Jangka Panjang   <span style="color:red">*</span>
                                        </label>
                                        <input name='utng_bank_jngka_pjg_sblm' id="utng_bank_jngka_pjg_sblm" type="text"  ref="utng_bank_jngka_pjg_sblm"  v-model="neraca.utng_bank_jngka_pjg_sblm" :class="{'is-invalid':errors.utng_bank_jngka_pjg_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.utng_bank_jngka_pjg_sblm"> <div style="color:red">{{errors.utng_bank_jngka_pjg_sblm[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Utang Bank Jangka Panjang  <span style="color:red">*</span></label>
                                        <input name='utng_bank_jngka_pjg_sudah' id="utng_bank_jngka_pjg_sudah" type="text"  v-model="neraca.utng_bank_jngka_pjg_sudah"  :class="{'is-invalid':errors.utng_bank_jngka_pjg_sudah}" class="form-control ml-1 number_valid" >
                                        <div  v-if="errors.utng_bank_jngka_pjg_sudah"> <div style="color:red">{{errors.utng_bank_jngka_pjg_sudah[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Utang Jangka Panjang Lainnya   <span style="color:red">*</span>
                                        </label>
                                        <input name='utng_jngka_pjg_lainya_sblm' id="utng_jngka_pjg_lainya_sblm" type="text"  ref="utng_jngka_pjg_lainya_sblm"  v-model="neraca.utng_jngka_pjg_lainya_sblm" :class="{'is-invalid':errors.utng_jngka_pjg_lainya_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.utng_jngka_pjg_lainya_sblm"> <div style="color:red">{{errors.utng_jngka_pjg_lainya_sblm[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Utang Jangka Panjang Lainnya  <span style="color:red">*</span></label>
                                        <input name='utng_jngka_pjg_lainya_sudah' id="utng_jngka_pjg_lainya_sudah" type="text"  v-model="neraca.utng_jngka_pjg_lainya_sudah"  :class="{'is-invalid':errors.utng_jngka_pjg_lainya_sudah}" class="form-control ml-1 number_valid" >
                                        <div  v-if="errors.utng_jngka_pjg_lainya_sudah"> <div style="color:red">{{errors.utng_jngka_pjg_lainya_sudah[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Jumlah Kewajiban Jangka Panjang  <span style="color:red">*</span></label>
                                        <input name='jml_kewajiban_jangka_pj' id="jml_kewajiban_jangka_pj" type="text" class="form-control ml-1 number_valid"  v-model="neraca.jml_kewajiban_jangka_pj" :class="{'is-invalid':errors.jml_kewajiban_jangka_pj}">
                                        <div  v-if="errors.jml_kewajiban_jangka_pj"> <div style="color:red">{{errors.jml_kewajiban_jangka_pj[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Jumlah Kewajiban Jangka Panjang  <span style="color:red">*</span></label>
                                        <input name='jml_kewajiban_jangka_pj' id="jml_kewajiban_jangka_pj" type="text" class="form-control ml-1 number_valid"  v-model="neraca.jml_kewajiban_jangka_pj" :class="{'is-invalid':errors.jml_kewajiban_jangka_pj}">
                                        <div  v-if="errors.jml_kewajiban_jangka_pj"> <div style="color:red">{{errors.jml_kewajiban_jangka_pj[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>
 -->

                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="exampleEmail11" class="ml-1"> <h5> MODAL :  </h5> </label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Modal Disetor   <span style="color:red">*</span>
                                        </label>
                                        <input name='modal_disetor_sblm' id="modal_disetor_sblm" type="text"  ref="modal_disetor_sblm"  v-model="neraca.modal_disetor_sblm" :class="{'is-invalid':errors.modal_disetor_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.modal_disetor_sblm"> <div style="color:red">{{errors.modal_disetor_sblm[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Modal Disetor  <span style="color:red">*</span>
                                        </label>
                                        <input name='modal_disetor_sudah' id="modal_disetor_sudah" type="text"  ref="modal_disetor_sudah"  v-model="neraca.modal_disetor_sudah" :class="{'is-invalid':errors.modal_disetor_sudah}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.modal_disetor_sudah"> <div style="color:red">{{errors.modal_disetor_sudah[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Selisih Revaluasi Aktiva Tetap    <span style="color:red">*</span>
                                        </label>
                                        <input name='slsih_rvluasi_aktv_ttp_sblm' id="slsih_rvluasi_aktv_ttp_sblm" type="text"  ref="slsih_rvluasi_aktv_ttp_sblm"  v-model="neraca.slsih_rvluasi_aktv_ttp_sblm" :class="{'is-invalid':errors.slsih_rvluasi_aktv_ttp_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.slsih_rvluasi_aktv_ttp_sblm"> <div style="color:red">{{errors.slsih_rvluasi_aktv_ttp_sblm[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Selisih Revaluasi Aktiva Tetap   <span style="color:red">*</span>
                                        </label>
                                        <input name='slsih_rvluasi_aktv_ttp_sudah' id="slsih_rvluasi_aktv_ttp_sudah" type="text"  ref="slsih_rvluasi_aktv_ttp_sudah"  v-model="neraca.slsih_rvluasi_aktv_ttp_sudah" :class="{'is-invalid':errors.slsih_rvluasi_aktv_ttp_sudah}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.slsih_rvluasi_aktv_ttp_sudah"> <div style="color:red">{{errors.slsih_rvluasi_aktv_ttp_sudah[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Laba Ditahan   <span style="color:red">*</span>
                                        </label>
                                        <input name='laba_ditahan_sblm' id="laba_ditahan_sblm" type="text"  ref="laba_ditahan_sblm"  v-model="neraca.laba_ditahan_sblm" :class="{'is-invalid':errors.laba_ditahan_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.laba_ditahan_sblm"> <div style="color:red">{{errors.laba_ditahan_sblm[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Laba Ditahan   <span style="color:red">*</span>
                                        </label>
                                        <input name='laba_ditahan_sudah' id="laba_ditahan_sudah" type="text"  ref="laba_ditahan_sudah"  v-model="neraca.laba_ditahan_sudah" :class="{'is-invalid':errors.laba_ditahan_sudah}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.laba_ditahan_sudah"> <div style="color:red">{{errors.laba_ditahan_sudah[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>  


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Jumlah Modal    <span style="color:red">*</span>
                                        </label>
                                        <input name='jml_modal_sblm' id="jml_modal_sblm" type="text"  ref="jml_modal_sblm"  v-model="neraca.jml_modal_sblm" :class="{'is-invalid':errors.jml_modal_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.jml_modal_sblm"> <div style="color:red">{{errors.jml_modal_sblm[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Jumlah Modal   <span style="color:red">*</span>
                                        </label>
                                        <input name='jml_modal_sudah' id="jml_modal_sudah" type="text"  ref="jml_modal_sudah"  v-model="neraca.jml_modal_sudah" :class="{'is-invalid':errors.jml_modal_sudah}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.jml_modal_sudah"> <div style="color:red">{{errors.jml_modal_sudah[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Total Kewajiban dan Modal   <span style="color:red">*</span>
                                        </label>
                                        <input name='total_kwjban_modal_sblm' id="total_kwjban_modal_sblm" type="text"  ref="total_kwjban_modal_sblm"  v-model="neraca.total_kwjban_modal_sblm" :class="{'is-invalid':errors.total_kwjban_modal_sblm}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.total_kwjban_modal_sblm"> <div style="color:red">{{errors.total_kwjban_modal_sblm[0]}} </div>    </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Total Kewajiban dan Modal   <span style="color:red">*</span>
                                        </label>
                                        <input name='total_kwjban_modal_sudah' id="total_kwjban_modal_sudah" type="text"  ref="total_kwjban_modal_sudah"  v-model="neraca.total_kwjban_modal_sudah" :class="{'is-invalid':errors.total_kwjban_modal_sudah}" class="form-control ml-1 number_valid">
                                        <div  v-if="errors.total_kwjban_modal_sudah"> <div style="color:red">{{errors.total_kwjban_modal_sudah[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>

        
    </div>

</template>

<script>
import {mapActions,mapState,mapMutations} from 'vuex';
import $axios from '../../api.js';

export default {

    name:"neraca",
    data(){
        return {
            errors:[],
            InActive:false,
            data_show:[],
            data_post:{},
            asem:{
                telo:[]
            },
            neraca:{
                no_berkas: this.$route.query.no_berkas,
                no_kta: this.$route.query.no_kta,
                tahun_aktv_sblm:'',
                tahun_aktv_sudah:'',
                kasbank_aktv_sblm:'',
                kasbank_aktv_sudah:'',
                piutang_ush_aktv_sblm:'',
                piutang_ush_aktv_sudah:'',
                persediaan_aktv_sblm:'',
                persediaan_aktv_sudah:'',
                piutang_pjk_aktv_sblm:'',
                piutang_pjk_aktv_sudah:'',
                biaya_byr_mk_aktv_sblm:'',
                biaya_byr_mk_aktv_sudah:'',
                pkrjaan_dlm_prs_aktv_sblm:'',
                pkrjaan_dlm_prs_aktv_sudah:'',
                jml_aktv_lncr_aktv_sblm:'',
                jml_aktv_lncr_aktv_sudah:'',
                prltan_proyek_aktv_sblm:'',
                prltan_proyek_aktv_sudah:'', 
                inventaris_kntr_aktv_sblm:'',
                inventaris_kntr_aktv_sudah:'',
                perltan_kntr_aktv_sblm:'',
                perltan_kntr_aktv_sudah:'',
                akumlsi_aktv_sblm:'',
                akumlsi_aktv_sudah:'',
                jml_aktv_ttp_sblm:'',
                jml_aktv_ttp_sudah:'',
                aktv_lainya_sblm:'',
                aktv_lainya_sudah:'',
                total_aktv_sblm:'',
                total_aktv_sudah:'',
                tahun_kwjb_sblm:'',
                tahun_kwjb_sudah:'',
                utang_bank_sblm:'',
                utang_bank_sudah:'',
                uang_muka_sblm:'',
                uang_muka_sudah:'',
                utang_pjk_sblm:'',
                utang_pjk_sudah:'',
                biaya_msh_hrs_byr_sblm:'',
                biaya_msh_hrs_byr_sudah:'',
                utng_jngka_pjg_jth_tmp_sblm:'',
                utng_jngka_pjg_jth_tmp_sudah:'',
                utang_lainya_sblm:'',
                utang_lainya_sudah:'',
                jml_kwjbn_lncar_sblm:'',
                jml_kwjbn_lncar_sudah:'',
                utng_bank_jngka_pjg_sblm:'',
                utng_bank_jngka_pjg_sudah:'',
                utng_jngka_pjg_lainya_sblm:'',
                utng_jngka_pjg_lainya_sudah:'',
                modal_disetor_sblm:'',
                modal_disetor_sudah:'',
                slsih_rvluasi_aktv_ttp_sblm:'',
                slsih_rvluasi_aktv_ttp_sudah:'',
                laba_ditahan_sblm:'',
                laba_ditahan_sudah:'',
                jml_modal_sblm:'',
                jml_modal_sudah:'',
                total_kwjban_modal_sblm:'',
                total_kwjban_modal_sudah:'',

                // kas_bank:'',
                // piutang_usaha:'',
                // persediaan:'',
                // piutang_pajak:'',
                // biaya_dibayar_dimuka:'',
                // pekerjaan_dlm_proses:'',
                // jml_aktiva_lancar:'',
                // peralatan_proyek:'',
                // inventaris_kantor:'',
                // peralatan_kantor:'',
                // akumulasi_penyusutan:'',
                // jml_aktiva_tetap:'',
                // aktiva_lainnya:'',
                // total_aktiva_lancar:'',
                // utang_bank:'',
                // uang_muka:'',
                // utang_pajak:'',
                // utang_jangka_panjang_jt:'',
                // utang_lainnya:'',
                // jml_kewajiban_lancar:'',
                // utang_jangka_panjang:'',
                // jml_kewajiban_jangka_pj:'',
                // modal_disetor:'',
                // laba_ditahan:'',
                // jml_modal:'',
            }        
        }
    }, 

    created(){
        var app = this;
    },
    methods:{

        clear_form(){
            this.tahun_aktv_sblm='';
            this.tahun_aktv_sudah='';
            this.kasbank_aktv_sblm='';
            this.kasbank_aktv_sudah='';
            this.piutang_ush_aktv_sblm='';
            this.piutang_ush_aktv_sudah='';
            this.persediaan_aktv_sblm='';
            this.persediaan_aktv_sudah='';
            this.piutang_pjk_aktv_sblm='';
            this.piutang_pjk_aktv_sudah='';
            this.biaya_byr_mk_aktv_sblm='';
            this.biaya_byr_mk_aktv_sudah='';
            this.pkrjaan_dlm_prs_aktv_sblm='';
            this.pkrjaan_dlm_prs_aktv_sudah='';
            this.jml_aktv_lncr_aktv_sblm='';
            this.jml_aktv_lncr_aktv_sudah='';
            this.prltan_proyek_aktv_sblm='';
            this.prltan_proyek_aktv_sudah=''; 
            this.inventaris_kntr_aktv_sblm='';
            this.inventaris_kntr_aktv_sudah='';
            this.perltan_kntr_aktv_sblm='';
            this.perltan_kntr_aktv_sudah='';
            this.akumlsi_aktv_sblm='';
            this.akumlsi_aktv_sudah='';
            this.jml_aktv_ttp_sblm='';
            this.jml_aktv_ttp_sudah='';
            this.aktv_lainya_sblm='';
            this.aktv_lainya_sudah='';
            this.total_aktv_sblm='';
            this.total_aktv_sudah='';
            this.tahun_kwjb_sblm='';
            this.tahun_kwjb_sudah='';
            this.utang_bank_sblm='';
            this.utang_bank_sudah='';
            this.uang_muka_sblm='';
            this.uang_muka_sudah='';
            this.utang_pjk_sblm='';
            this.utang_pjk_sudah='';
            this.biaya_msh_hrs_byr_sblm='';
            this.biaya_msh_hrs_byr_sudah='';
            this.utng_jngka_pjg_jth_tmp_sblm='';
            this.utng_jngka_pjg_jth_tmp_sudah='';
            this.utang_lainya_sblm='';
            this.utang_lainya_sudah='';
            this.jml_kwjbn_lncar_sblm='';
            this.jml_kwjbn_lncar_sudah='';
            this.utng_bank_jngka_pjg_sblm='';
            this.utng_bank_jngka_pjg_sudah='';
            this.utng_jngka_pjg_lainya_sblm='';
            this.utng_jngka_pjg_lainya_sudah='';
            this.modal_disetor_sblm='';
            this.modal_disetor_sudah='';
            this.slsih_rvluasi_aktv_ttp_sblm='';
            this.slsih_rvluasi_aktv_ttp_sudah='';
            this.laba_ditahan_sblm='';
            this.laba_ditahan_sudah='';
            this.jml_modal_sblm='';
            this.jml_modal_sudah='';
            this.total_kwjban_modal_sblm='';
            this.total_kwjban_modal_sudah='';
        },


        store_data(e){
            e.preventDefault();
            var app = this;
            app.InActive = true;
            $axios.post(`neraca`,app.neraca).then(function(resp){
                swal('Success','Simpan data berhasil','success');
                app.clear_form();
                app.$router.push('/data-administrasi/detail/'+app.neraca.no_berkas+'/'+app.neraca.no_kta);
                app.InActive = false;
            }).catch(function(resp){
                app.InActive = false;
                if(resp.response.data.errors)
                {
                    app.errors = resp.response.data.errors;                    
                }
                else
                {
                    swal('Error',resp.response.data.message,'error');
                }

            })
        },


    }

}
</script>
