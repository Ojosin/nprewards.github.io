<template>    
   <div>
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon" style="background:#0069b8;color:#fff">
                        <i class="fa fa-user">
                        </i>
                    </div>
                    <div>Edit Neraca
                        <div class="page-title-subheading">Form dibawah ini adalah Neraca untuk pengajuan sertifikasi di  system SBU INKINDO.
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">

                    <button type="button" @click="update_data" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-success">
                        <i class="fa fa-business-time fa-w-20"></i> Update
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
                                <div class="col-md-12">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Tahun   <span style="color:red">*</span>
                                        </label>
                                        <input name='tahun' id="tahun" type="text"  ref="tahun"  v-model="neraca.tahun" :class="{'is-invalid':errors.tahun}" class="form-control ml-1">
                                        <div  v-if="errors.tahun"> <div style="color:red">{{errors.tahun[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Kas dan Bank  <span style="color:red">*</span></label>
                                        <input name='kas_bank' id="kas_bank" type="text"  v-model="neraca.kas_bank"  :class="{'is-invalid':errors.kas_bank}" class="form-control ml-1" >
                                        <div  v-if="errors.kas_bank"> <div style="color:red">{{errors.kas_bank[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Piutang Usaha <span style="color:red">*</span></label>
                                        <input name='piutang_usaha' id="piutang_usaha" type="text" class="form-control ml-1"  v-model="neraca.piutang_usaha" :class="{'is-invalid':errors.piutang_usaha}">
                                        <div  v-if="errors.piutang_usaha"> <div style="color:red">{{errors.piutang_usaha[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Persediaan  </label>
                                        <input name='persediaan' id="persediaan" v-model="neraca.persediaan"   type="text"  :class="{'is-invalid':errors.persediaan}" class="form-control ml-1">
                                        <div  v-if="errors.persediaan"> <div style="color:red">{{errors.persediaan[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Piutang Pajak  </label>
                                        <input name='piutang_pajak' id="piutang_pajak" type="text" v-model="neraca.piutang_pajak"   :class="{'is-invalid':errors.piutang_pajak}" class="form-control ml-1">
                                        <div  v-if="errors.piutang_pajak"> <div style="color:red">{{errors.piutang_pajak[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Biaya dibayar dimuka </label>
                                        <input name='biaya_dibayar_dimuka' id="biaya_dibayar_dimuka" v-model="neraca.biaya_dibayar_dimuka"   type="text"  :class="{'is-invalid':errors.biaya_dibayar_dimuka}" class="form-control ml-1">
                                        <div  v-if="errors.biaya_dibayar_dimuka"> <div style="color:red">{{errors.biaya_dibayar_dimuka[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Pekerjaan dalam proses  </label>
                                        <input name='pekerjaan_dlm_proses' id="pekerjaan_dlm_proses" type="text" v-model="neraca.pekerjaan_dlm_proses"   :class="{'is-invalid':errors.pekerjaan_dlm_proses}" class="form-control ml-1">
                                        <div  v-if="errors.pekerjaan_dlm_proses"> <div style="color:red">{{errors.pekerjaan_dlm_proses[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Jumlah Aktiva Lancar </label>
                                        <input name='jml_aktiva_lancar' id="jml_aktiva_lancar" v-model="neraca.jml_aktiva_lancar"   type="text"  :class="{'is-invalid':errors.jml_aktiva_lancar}" class="form-control ml-1">
                                        <div  v-if="errors.jml_aktiva_lancar"> <div style="color:red">{{errors.jml_aktiva_lancar[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="exampleEmail11" class="ml-1"> <h5> AKTIVA TETAP :  </h5> </label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Peralatan Proyek   <span style="color:red">*</span>
                                        </label>
                                        <input name='peralatan_proyek' id="peralatan_proyek" type="text"  ref="peralatan_proyek"  v-model="neraca.peralatan_proyek" :class="{'is-invalid':errors.peralatan_proyek}" class="form-control ml-1">
                                        <div  v-if="errors.peralatan_proyek"> <div style="color:red">{{errors.peralatan_proyek[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Inventaris Kantor  <span style="color:red">*</span></label>
                                        <input name='inventaris_kantor' id="inventaris_kantor" type="text"  v-model="neraca.inventaris_kantor"  :class="{'is-invalid':errors.inventaris_kantor}" class="form-control ml-1" >
                                        <div  v-if="errors.inventaris_kantor"> <div style="color:red">{{errors.inventaris_kantor[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Peralatan Kantor <span style="color:red">*</span></label>
                                        <input name='peralatan_kantor' id="peralatan_kantor" type="text" class="form-control ml-1"  v-model="neraca.peralatan_kantor" :class="{'is-invalid':errors.peralatan_kantor}">
                                        <div  v-if="errors.peralatan_kantor"> <div style="color:red">{{errors.peralatan_kantor[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Akumulasi Penyusutan  </label>
                                        <input name='akumulasi_penyusutan' id="akumulasi_penyusutan" v-model="neraca.akumulasi_penyusutan"   type="text"  :class="{'is-invalid':errors.akumulasi_penyusutan}" class="form-control ml-1">
                                        <div  v-if="errors.akumulasi_penyusutan"> <div style="color:red">{{errors.akumulasi_penyusutan[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Jumlah Aktiva Tetap </label>
                                        <input name='jml_aktiva_tetap' id="jml_aktiva_tetap" v-model="neraca.jml_aktiva_tetap"   type="text"  :class="{'is-invalid':errors.jml_aktiva_tetap}" class="form-control ml-1">
                                        <div  v-if="errors.jml_aktiva_tetap"> <div style="color:red">{{errors.jml_aktiva_tetap[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="exampleEmail11" class="ml-1"> <h5> AKTIVA LAINNYA :  </h5> </label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Aktiva lainnya   <span style="color:red">*</span>
                                        </label>
                                        <input name='aktiva_lainnya' id="aktiva_lainnya" type="text"  ref="aktiva_lainnya"  v-model="neraca.aktiva_lainnya" :class="{'is-invalid':errors.aktiva_lainnya}" class="form-control ml-1">
                                        <div  v-if="errors.aktiva_lainnya"> <div style="color:red">{{errors.aktiva_lainnya[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="position-relative form-group">
                                    <label for="exampleEmail11" class="ml-1 bintang">
                                        Total Aktiva Lancar   <span style="color:red">*</span>
                                    </label>
                                    <input name='total_aktiva_lancar' id="total_aktiva_lancar" type="text"  ref="total_aktiva_lancar"  v-model="neraca.total_aktiva_lancar" :class="{'is-invalid':errors.total_aktiva_lancar}" class="form-control ml-1">
                                    <div  v-if="errors.total_aktiva_lancar"> <div style="color:red">{{errors.total_aktiva_lancar[0]}} </div>    </div>
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
                                <div class="col-md-12">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Tahun   <span style="color:red">*</span>
                                        </label>
                                        <input name='tahun' id="tahun" type="text"  ref="tahun"  v-model="neraca.tahun" :class="{'is-invalid':errors.tahun}" class="form-control ml-1">
                                        <div  v-if="errors.tahun"> <div style="color:red">{{errors.tahun[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Utang Bank  <span style="color:red">*</span></label>
                                        <input name='utang_bank' id="utang_bank" type="text"  v-model="neraca.utang_bank"  :class="{'is-invalid':errors.utang_bank}" class="form-control ml-1" >
                                        <div  v-if="errors.utang_bank"> <div style="color:red">{{errors.utang_bank[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Uang Muka <span style="color:red">*</span></label>
                                        <input name='uang_muka' id="uang_muka" type="text" class="form-control ml-1"  v-model="neraca.uang_muka" :class="{'is-invalid':errors.uang_muka}">
                                        <div  v-if="errors.uang_muka"> <div style="color:red">{{errors.uang_muka[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Utang Pajak  </label>
                                        <input name='utang_pajak' id="utang_pajak" v-model="neraca.utang_pajak"   type="text"  :class="{'is-invalid':errors.utang_pajak}" class="form-control ml-1">
                                        <div  v-if="errors.utang_pajak"> <div style="color:red">{{errors.utang_pajak[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Biaya masih harus dibayar  </label>
                                        <input name='biaya_msh_dibayar' id="biaya_msh_dibayar" type="text" v-model="neraca.biaya_msh_dibayar"   :class="{'is-invalid':errors.biaya_msh_dibayar}" class="form-control ml-1">
                                        <div  v-if="errors.biaya_msh_dibayar"> <div style="color:red">{{errors.biaya_msh_dibayar[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Utang Jangka Panjang Jatuh Tempo </label>
                                        <input name='utang_jangka_panjang_jt' id="utang_jangka_panjang_jt" v-model="neraca.utang_jangka_panjang_jt"   type="text"  :class="{'is-invalid':errors.utang_jangka_panjang_jt}" class="form-control ml-1">
                                        <div  v-if="errors.utang_jangka_panjang_jt"> <div style="color:red">{{errors.utang_jangka_panjang_jt[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang">  Utang Lainnya  </label>
                                        <input name='utang_lainnya' id="utang_lainnya" type="text" v-model="neraca.utang_lainnya"   :class="{'is-invalid':errors.utang_lainnya}" class="form-control ml-1">
                                        <div  v-if="errors.utang_lainnya"> <div style="color:red">{{errors.utang_lainnya[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Jumlah Kewajiban Lancar </label>
                                        <input name='jml_kewajiban_lancar' id="jml_kewajiban_lancar" v-model="neraca.jml_kewajiban_lancar"   type="text"  :class="{'is-invalid':errors.jml_kewajiban_lancar}" class="form-control ml-1">
                                        <div  v-if="errors.jml_kewajiban_lancar"> <div style="color:red">{{errors.jml_kewajiban_lancar[0]}} </div>    </div>
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
                                        <input name='utang_jangka_panjang' id="utang_jangka_panjang" type="text"  ref="utang_jangka_panjang"  v-model="neraca.utang_jangka_panjang" :class="{'is-invalid':errors.utang_jangka_panjang}" class="form-control ml-1">
                                        <div  v-if="errors.utang_jangka_panjang"> <div style="color:red">{{errors.utang_jangka_panjang[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Utang Jangka Panjang Lainnya  <span style="color:red">*</span></label>
                                        <input name='utang_jangka_panjang_lainnya' id="utang_jangka_panjang_lainnya" type="text"  v-model="neraca.utang_jangka_panjang_lainnya"  :class="{'is-invalid':errors.utang_jangka_panjang_lainnya}" class="form-control ml-1" >
                                        <div  v-if="errors.utang_jangka_panjang_lainnya"> <div style="color:red">{{errors.utang_jangka_panjang_lainnya[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Jumlah Kewajiban Jangka Panjang  <span style="color:red">*</span></label>
                                        <input name='jml_kewajiban_jangka_pj' id="jml_kewajiban_jangka_pj" type="text" class="form-control ml-1"  v-model="neraca.jml_kewajiban_jangka_pj" :class="{'is-invalid':errors.jml_kewajiban_jangka_pj}">
                                        <div  v-if="errors.jml_kewajiban_jangka_pj"> <div style="color:red">{{errors.jml_kewajiban_jangka_pj[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


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
                                        <input name='modal_disetor' id="modal_disetor" type="text"  ref="modal_disetor"  v-model="neraca.modal_disetor" :class="{'is-invalid':errors.modal_disetor}" class="form-control ml-1">
                                        <div  v-if="errors.modal_disetor"> <div style="color:red">{{errors.modal_disetor[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Selisih Revaluasi Aktiva Tetap   <span style="color:red">*</span>
                                        </label>
                                        <input name='selisih_revaluasi' id="selisih_revaluasi" type="text"  ref="selisih_revaluasi"  v-model="neraca.selisih_revaluasi" :class="{'is-invalid':errors.selisih_revaluasi}" class="form-control ml-1">
                                        <div  v-if="errors.selisih_revaluasi"> <div style="color:red">{{errors.selisih_revaluasi[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Laba Ditahan   <span style="color:red">*</span>
                                        </label>
                                        <input name='laba_ditahan' id="laba_ditahan" type="text"  ref="laba_ditahan"  v-model="neraca.laba_ditahan" :class="{'is-invalid':errors.laba_ditahan}" class="form-control ml-1">
                                        <div  v-if="errors.laba_ditahan"> <div style="color:red">{{errors.laba_ditahan[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Jumlah Modal   <span style="color:red">*</span>
                                        </label>
                                        <input name='jml_modal' id="jml_modal" type="text"  ref="jml_modal"  v-model="neraca.jml_modal" :class="{'is-invalid':errors.jml_modal}" class="form-control ml-1">
                                        <div  v-if="errors.jml_modal"> <div style="color:red">{{errors.jml_modal[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="position-relative form-group">
                                    <label for="exampleEmail11" class="ml-1 bintang">
                                        Total Kewajiban dan Modal   <span style="color:red">*</span>
                                    </label>
                                    <input name='total_kewajiban_modal' id="total_kewajiban_modal" type="text"  ref="total_kewajiban_modal"  v-model="neraca.total_kewajiban_modal" :class="{'is-invalid':errors.total_kewajiban_modal}" class="form-control ml-1">
                                    <div  v-if="errors.total_kewajiban_modal"> <div style="color:red">{{errors.total_kewajiban_modal[0]}} </div>    </div>
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

    name:"index",
    data(){
        return {
            InActive:false,
            errors:[],
            data_show:[],
            data_post:{},
            neraca:{
                no_berkas: this.$route.query.no_berkas,
                no_kta: this.$route.query.no_kta,
                tahun:'',
                id_neraca:'',
                kas_bank:'',
                piutang_usaha:'',
                persediaan:'',
                piutang_pajak:'',
                biaya_dibayar_dimuka:'',
                pekerjaan_dlm_proses:'',
                jml_aktiva_lancar:'',
                peralatan_proyek:'',
                inventaris_kantor:'',
                peralatan_kantor:'',
                akumulasi_penyusutan:'',
                jml_aktiva_tetap:'',
                aktiva_lainnya:'',
                total_aktiva_lancar:'',
                utang_bank:'',
                uang_muka:'',
                utang_pajak:'',
                utang_jangka_panjang_jt:'',
                utang_lainnya:'',
                jml_kewajiban_lancar:'',
                utang_jangka_panjang:'',
                jml_kewajiban_jangka_pj:'',
                modal_disetor:'',
                laba_ditahan:'',
                jml_modal:'',
            }           
        }
    }, 

    created(){
        var app = this;
        app.edit_neraca();
    },
    methods:{


        clear_form(){
             
            this.neraca.tahun='';
            this.neraca.kas_bank='';
            this.neraca.piutang_usaha='';
            this.neraca.persediaan='';
            this.neraca.piutang_pajak='';
            this.neraca.biaya_dibayar_dimuka='';
            this.neraca.pekerjaan_dlm_proses='';
            this.neraca.jml_aktiva_lancar='';
            this.neraca.peralatan_proyek='';
            this.neraca.inventaris_kantor='';
            this.neraca.peralatan_kantor='';
            this.neraca.akumulasi_penyusutan='';
            this.neraca.jml_aktiva_tetap='';
            this.neraca.aktiva_lainnya='';
            this.neraca.total_aktiva_lancar='';
            this.neraca.utang_bank='';
            this.neraca.uang_muka='';
            this.neraca.utang_pajak='';
            this.neraca.utang_jangka_panjang_jt='';
            this.neraca.utang_lainnya='';
            this.neraca.jml_kewajiban_lancar='';
            this.neraca.utang_jangka_panjang='';
            this.neraca.jml_kewajiban_jangka_pj='';
            this.neraca.modal_disetor='';
            this.neraca.laba_ditahan='';
            this.neraca.jml_modal='';   
        },


        update_data(e){
            e.preventDefault();
            var app = this;
            app.InActive = true;
            $axios.put('/neraca/'+app.neraca.id_neraca,app.neraca).then(function(resp){
                swal('Success','Ubah data berhasil','success');
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
        edit_neraca(){
            var app = this;
            var id =  app.$route.params.id;

            $axios.get('neraca/'+id+'/edit')
            .then(function(resp){
                app.neraca.id_neraca=resp.data.id_neraca;
                app.neraca.tahun=resp.data.tahun;
                app.neraca.kas_bank=resp.data.kas_bank;
                app.neraca.piutang_usaha=resp.data.piutang_usaha;
                app.neraca.persediaan=resp.data.persediaan;
                app.neraca.piutang_pajak=resp.data.piutang_pajak;
                app.neraca.biaya_dibayar_dimuka=resp.data.biaya_dibayar_dimuka;
                app.neraca.pekerjaan_dlm_proses=resp.data.napekerjaan_dlm_prosesme;
                app.neraca.jml_aktiva_lancar=resp.data.jml_aktiva_lancar;
                app.neraca.peralatan_proyek=resp.data.peralatan_proyek;
                app.neraca.inventaris_kantor=resp.data.naminventaris_kantore;
                app.neraca.peralatan_kantor=resp.data.peralatan_kantor;
                app.neraca.akumulasi_penyusutan=resp.data.akumulasi_penyusutan;
                app.neraca.jml_aktiva_tetap=resp.data.jml_aktiva_tetap;
                app.neraca.aktiva_lainnya=resp.data.aktiva_lainnya;
                app.neraca.total_aktiva_lancar=resp.data.total_aktiva_lancar;
                app.neraca.utang_bank=resp.data.utang_bank;
                app.neraca.uang_muka=resp.data.uang_muka;
                app.neraca.utang_pajak=resp.data.utang_pajak;
                app.neraca.utang_jangka_panjang_jt=resp.data.utang_jangka_panjang_jt;
                app.neraca.utang_lainnya=resp.data.utang_lainnya;
                app.neraca.jml_kewajiban_lancar=resp.data.jml_kewajiban_lancar;
                app.neraca.utang_jangka_panjang=resp.data.utang_jangka_panjang;
                app.neraca.jml_kewajiban_jangka_pj=resp.data.jml_kewajiban_jangka_pj;
                app.neraca.modal_disetor=resp.data.modal_disetor;
                app.neraca.laba_ditahan=resp.data.laba_ditahan;
                app.neraca.jml_modal=resp.data.jml_modal;   
            })
            .catch(function(resp){

            })
        },


    }

}
</script>
