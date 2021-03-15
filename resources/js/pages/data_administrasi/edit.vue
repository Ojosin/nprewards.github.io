<template>    
    <div>
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon" style="background:#0069b8;color:#fff">
                        <i class="fa fa-user">
                        </i>
                    </div>
                    <div>Buat Baru Data Administrasi
                        <div class="page-title-subheading">Form dibawah ini adalah untuk menambahkan data administrasi system SBU INKINDO.
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    
                    <button type="button"  title="Example Tooltip" data-placement="bottom" @click="update_data" class="btn-shadow mr-3 btn btn-success">
                        <i class="fa fa-business-time fa-w-20"></i> Simpan
                    </button>
                    <div class="d-inline-block dropdown">
                        <router-link class="btn btn-danger" :to="{name:'data-administrasi.data'}"><i class="fa fa-chevron-left"></i>
                            Batal
                        </router-link>
                    </div>
                </div>    

            </div>
        </div>

        <div class="tab-pane tabs-animation fade active show" id="tab-content-0" role="tabpanel">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="ml-1 bintang">
                                                Tanggal Aplikasi  <span style="color:red">*</span>
                                            </label>
                                            <input name='tgl_aplikasi' readonly="readonly" id="tgl_aplikasi" type="date"  ref="tgl_aplikasi"  v-model="data_administrasi.tgl_aplikasi" :class="{'is-invalid':errors.tgl_aplikasi}" class="form-control ml-1">
                                            <div  v-if="errors.tgl_aplikasi"> <div style="color:red">{{errors.tgl_aplikasi[0]}} </div>    </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="ml-1 bintang">No Berkas<span style="color:red">*</span></label>
                                            <input name='no_berkas' readonly="readonly" id="no_berkas" type="text"  v-model="data_administrasi.no_berkas"  :class="{'is-invalid':errors.no_berkas}" class="form-control ml-1" >
                                            <div  v-if="errors.no_berkas"> <div style="color:red">{{errors.no_berkas[0]}} </div>    </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="ml-1 bintang">No Registrasi BU<span style="color:red">*</span></label>
                                            <input name='no_registrasi_buk' readonly="readonly" id="no_registrasi_buk" type="text"  v-model="data_administrasi.no_registrasi_buk"  :class="{'is-invalid':errors.no_registrasi_buk}" class="form-control ml-1" >
                                            <div  v-if="errors.no_registrasi_buk"> <div style="color:red">{{errors.no_registrasi_buk[0]}} </div>    </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="ml-1 bintang">Tahapan<span style="color:red">*</span></label>
                                            <input name='tahapan' id="tahapan" readonly="readonly" type="text" class="form-control ml-1"  v-model="data_administrasi.tahapan" :class="{'is-invalid':errors.tahapan}">
                                            <div  v-if="errors.tahapan"> <div style="color:red">{{errors.tahapan[0]}} </div>    </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="ml-1 bintang"> No Anggota INKINDO <span style="color:red">*</span></label>
                                            <input name='no_anggota_inkindo' readonly="readonly" id="no_anggota_inkindo" type="text"  v-model="data_administrasi.no_anggota_inkindo"  :class="{'is-invalid':errors.no_anggota_inkindo}" class="form-control ml-1" >
                                            <div  v-if="errors.no_anggota_inkindo"> <div style="color:red">{{errors.no_anggota_inkindo[0]}} </div>    </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="ml-1 bintang"> Nama Badan Usaha <span style="color:red">*</span></label>
                                            <input name='nama_badan_usaha' id="nama_badan_usaha" type="text" class="form-control ml-1"  v-model="data_administrasi.nama_badan_usaha" :class="{'is-invalid':errors.nama_badan_usaha}">
                                            <div  v-if="errors.nama_badan_usaha"> <div style="color:red">{{errors.nama_badan_usaha[0]}} </div>    </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="position-relative form-group"><label for="exampleEmail11" class="ml-1">Alamat Lengkap Perusahaan</label>
                                            <textarea name='alamat' v-model="data_administrasi.alamat"  id="alamat" type="text"  :class="{'is-invalid':errors.alamat}" class="form-control ml-1" rows="3"></textarea>
                                            <div  v-if="errors.alamat"> <div style="color:red">{{errors.alamat[0]}} </div>    </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="ml-1 bintang"> Provinsi </label>
                                            <select class="form-control" id="kode_provinsi" name="kode_provinsi" @change="get_kabupaten_($event)"  v-model="data_administrasi.kode_provinsi">
                                                <option value=""> - Pilih Provinsi - </option>
                                                <option  v-for="(item, index) in provinsi " :key="index" :value="item.kode_provinsi"> {{item.nama_provinsi}} </option>
                                            </select>
                                            <div  v-if="errors.kode_provinsi"> <div style="color:red">{{errors.kode_provinsi[0]}} </div>    </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="ml-1 bintang"> Kabupaten / Kota </label>
                                            <select class="form-control" id="kode_kabupaten" name="kode_kabupaten" v-model="data_administrasi.kode_kabupaten">
                                                <option value=""> - Pilih Kabupaten - </option>
                                                <option  v-for="(item, index) in list_kabupaten " :key="index" :value="item.kode_kabupaten"> {{item.nama_kabupaten}} </option>
                                            </select>
                                            <div  v-if="errors.kode_kabupaten"> <div style="color:red">{{errors.kode_kabupaten[0]}} </div>    </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="ml-1 bintang"> Kode POS </label>
                                            <input name='kode_pos' id="kode_pos" v-model="data_administrasi.kode_pos"   type="text"  :class="{'is-invalid':errors.kode_pos}" class="form-control ml-1">
                                            <div  v-if="errors.kode_pos"> <div style="color:red">{{errors.kode_pos[0]}} </div>    </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="ml-1 bintang"> Catatan </label>
                                            <input name='catatan' id="catatan" type="text" v-model="data_administrasi.catatan"   :class="{'is-invalid':errors.catatan}" class="form-control ml-1">
                                            <div  v-if="errors.catatan"> <div style="color:red">{{errors.catatan[0]}} </div>    </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="ml-1 bintang"> Telepon </label>
                                            <input name='telepon' id="telepon" v-model="data_administrasi.telepon"   type="text"  :class="{'is-invalid':errors.telepon}" class="form-control ml-1">
                                            <div  v-if="errors.telepon"> <div style="color:red">{{errors.telepon[0]}} </div>    </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="ml-1 bintang"> Fax </label>
                                            <input name='fax' id="fax" type="text" v-model="data_administrasi.fax"   :class="{'is-invalid':errors.fax}" class="form-control ml-1">
                                            <div  v-if="errors.fax"> <div style="color:red">{{errors.fax[0]}} </div>    </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="ml-1 bintang"> Email </label>
                                            <input name='email' id="email" v-model="data_administrasi.email"   type="text"  :class="{'is-invalid':errors.email}" class="form-control ml-1">
                                            <div  v-if="errors.email"> <div style="color:red">{{errors.email[0]}} </div>    </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="ml-1 bintang"> Website </label>
                                            <input name='website' id="website" type="text" v-model="data_administrasi.website"   :class="{'is-invalid':errors.website}" class="form-control ml-1">
                                            <div  v-if="errors.website"> <div style="color:red">{{errors.website[0]}} </div>    </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="ml-1 bintang">
                                                Bentuk Badan Usaha  <span style="color:red">*</span>
                                            </label>
                                            <input name='bentuk_bu' id="bentuk_bu" type="text"  ref="bentuk_bu"  v-model="data_administrasi.bentuk_bu" :class="{'is-invalid':errors.bentuk_bu}" class="form-control ml-1">
                                            <div  v-if="errors.bentuk_bu"> <div style="color:red">{{errors.bentuk_bu[0]}} </div>    </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="ml-1 bintang"> Golongan Badan Usaha<span style="color:red">*</span></label>
                                            <input name='golongan_bu' id="golongan_bu" type="text"  v-model="data_administrasi.golongan_bu"  :class="{'is-invalid':errors.golongan_bu}" class="form-control ml-1" >
                                            <div  v-if="errors.golongan_bu"> <div style="color:red">{{errors.golongan_bu[0]}} </div>    </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="ml-1 bintang"> Kualifikasi Badan Usaha <span style="color:red">*</span></label>
                                            <input name='kualifikasi_bu' id="kualifikasi_bu" type="text"  v-model="data_administrasi.kualifikasi_bu"  :class="{'is-invalid':errors.kualifikasi_bu}" class="form-control ml-1" >
                                            <div  v-if="errors.kualifikasi_bu"> <div style="color:red">{{errors.kualifikasi_bu[0]}} </div>    </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="ml-1 bintang">Status Sertifikasi <span style="color:red">*</span></label>
                                            <input name='status_sertifikasi' id="status_sertifikasi" type="text" class="form-control ml-1"  v-model="data_administrasi.status_sertifikasi" :class="{'is-invalid':errors.tahap}">
                                            <div  v-if="errors.status_sertifikasi"> <div style="color:red">{{errors.status_sertifikasi[0]}} </div>    </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="exampleEmail11" class="ml-1"> <h5> SIUP / SIKJPP :  </h5> </label>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="ml-1 bintang"> Nomor  </label>
                                            <input name='no_siup' id="no_siup" v-model="data_administrasi.no_siup"   type="text"  :class="{'is-invalid':errors.no_siup}" class="form-control ml-1">
                                            <div  v-if="errors.no_siup"> <div style="color:red">{{errors.no_siup[0]}} </div>    </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="ml-1 bintang"> Tanggal  </label>
                                            <input name='tgl_siup' id="tgl_siup" type="date" v-model="data_administrasi.tgl_siup"   :class="{'is-invalid':errors.tgl_siup}" class="form-control ml-1">
                                            <div  v-if="errors.tgl_siup"> <div style="color:red">{{errors.tgl_siup[0]}} </div>    </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="exampleEmail11" class="ml-1"> <h5> Surat Izin PMA / PMDN :  </h5> </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="ml-1 bintang"> Nomor  </label>
                                            <input name='no_pma' id="no_pma" v-model="data_administrasi.no_pma"   type="text"  :class="{'is-invalid':errors.no_pma}" class="form-control ml-1">
                                            <div  v-if="errors.no_pma"> <div style="color:red">{{errors.no_pma[0]}} </div>    </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="ml-1 bintang"> Tanggal  </label>
                                            <input name='tgl_pma' id="tgl_pma" type="text" v-model="data_administrasi.tgl_pma"   :class="{'is-invalid':errors.tgl_pma}" class="form-control ml-1">
                                            <div  v-if="errors.tgl_pma"> <div style="color:red">{{errors.tgl_pma[0]}} </div>    </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="ml-1 bintang"> No SPT  </label>
                                            <input name='no_spt' id="no_telpon" type="text" v-model="data_administrasi.no_spt"   :class="{'is-invalid':errors.no_spt}" class="form-control ml-1">
                                            <div  v-if="errors.no_spt"> <div style="color:red">{{errors.no_spt[0]}} </div>    </div>
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

    name:"index",
    data(){
        return {
            InActive:false,
            errors:[],
            data_show:[],
            data_post:{},
            list_kabupaten:[],
            data_administrasi:{
                no_kta: Math.floor((1 + Math.random()) * 0x10000)
                  .toString(16)
                  .substring(1),
                tgl_aplikasi:new Date().toJSON().slice(0,10),
                tahapan:'',
                id_data_administrasi:'',
                no_berkas:'00001',
                no_registrasi_buk:'',
                no_anggota_inkindo:'',
                nama_badan_usaha:'',
                alamat:'',
                kode_provinsi:'',
                kode_kabupaten:'',
                kode_pos:'',
                catatan:'',
                telepon:'',
                fax:'',
                email:'',
                website:'',
                bentuk_bu:'',
                golongan_bu:'',
                kualifikasi_bu:'',
                status_sertifikasi:'',
                no_siup:'',
                tgl_siup:'',
                no_pma:'',
                tgl_pma:'',
                no_spt:'',                
            }        
        }
    }, 

    created(){
        var app = this;
        app.get_provinsi();

    },
    mounted(){
        var app = this;
        var id =  app.$route.params.id;

        $axios.get('data_administrasi/'+id+'/edit')
        .then(function(resp){

            app.data_administrasi.no_kta=resp.data.no_kta;
            app.data_administrasi.tahapan=resp.data.tahapan;
            app.data_administrasi.no_berkas=resp.data.no_berkas;
            app.data_administrasi.no_registrasi_buk=resp.data.no_registrasi_buk;
            app.data_administrasi.no_anggota_inkindo=resp.data.no_anggota_inkindo;
            app.data_administrasi.nama_badan_usaha=resp.data.nama_badan_usaha;
            app.data_administrasi.alamat=resp.data.alamat;
            app.data_administrasi.kode_provinsi=resp.data.kode_provinsi;
            app.data_administrasi.kode_kabupaten=resp.data.kode_kabupaten;
            app.data_administrasi.kode_pos=resp.data.kode_pos;
            app.data_administrasi.catatan=resp.data.catatan;
            app.data_administrasi.telepon=resp.data.telepon;
            app.data_administrasi.fax=resp.data.fax;
            app.data_administrasi.email=resp.data.email;
            app.data_administrasi.website=resp.data.website;
            app.data_administrasi.bentuk_bu=resp.data.bentuk_bu;
            app.data_administrasi.golongan_bu=resp.data.golongan_bu;
            app.data_administrasi.kualifikasi_bu=resp.data.kualifikasi_bu;
            app.data_administrasi.status_sertifikasi=resp.data.status_sertifikasi;
            app.data_administrasi.no_siup=resp.data.no_siup;
            app.data_administrasi.tgl_siup=resp.data.tgl_siup;
            app.data_administrasi.no_pma=resp.data.no_pma;
            app.data_administrasi.tgl_pma=resp.data.tgl_pma;
            app.data_administrasi.no_spt=resp.data.no_spt;   
            app.data_administrasi.id_data_administrasi=resp.data.id_data_administrasi;   
            app.get_kabupaten(resp.data.kode_provinsi).then(function(res){
                app.list_kabupaten = res;
            });
            
        })
        .catch(function(resp){

        })

     
        
    },
    computed:{
        ...mapState('application',{
            provinsi:state=>state.provinsi,
            kabupaten:state=>state.kabupaten
        })
    },
    methods:{
        ...mapActions('application',['get_provinsi','get_kabupaten']),

        clear_form(){
            
            this.no_kta="";
            this.tahapan="";
            this.no_berkas="";
            this.no_registrasi_buk="";
            this.no_anggota_inkindo="";
            this.nama_badan_usaha="";
            this.alamat="";
            this.kode_provinsi="";
            this.kode_kabupaten="";
            this.kode_pos="";
            this.catatan="";
            this.telepon="";
            this.fax="";
            this.email="";
            this.website="";
            this.bentuk_bu="";
            this.golongan_bu="";
            this.kualifikasi_bu="";
            this.status_sertifikasi="";
            this.no_siup="";
            this.tgl_siup="";
            this.no_pma="";
            this.tgl_pma="";
            this.no_spt="";                
        },


        update_data(e){

            e.preventDefault();
            var app = this;
            app.InActive = true;
            $axios.put('/data_administrasi/'+app.data_administrasi.id_data_administrasi,app.data_administrasi).then(function(resp){
                swal('Success','Ubah data berhasil','success');
                app.clear_form();
                app.$router.push('/data-administrasi');
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

        get_kabupaten_(e){
            this.get_kabupaten(e.target.value).then(()=>{                    
                this.list_kabupaten = this.kabupaten;
            });                
        },



    }

}
</script>
