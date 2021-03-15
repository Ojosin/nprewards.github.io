<template>    
    <div>
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon" style="background:#0069b8;color:#fff">
                        <i class="fa fa-user">
                        </i>
                    </div>
                    <div>Buat Baru Akte Notaris
                        <div class="page-title-subheading">Form dibawah ini adalah Akte Notaris untuk pengajuan sertifikasi di  system SBU INKINDO.
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
                            <h4 > AKTE PENDIRIAN </h4>
                            <hr>    
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Tanggal   <span style="color:red">*</span>
                                        </label>
                                        <input name='tgl_pendirian' id="tgl_pendirian" type="date"  ref="tgl_pendirian"  v-model="akte_notaris.tgl_pendirian" :class="{'is-invalid':errors.tgl_pendirian}" class="form-control ml-1">
                                        <div  v-if="errors.tgl_pendirian"> <div style="color:red">{{errors.tgl_pendirian[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">Nomor<span style="color:red">*</span></label>
                                        <input name='no_pendirian' id="no_pendirian" type="text"  v-model="akte_notaris.no_pendirian"  :class="{'is-invalid':errors.no_pendirian}" class="form-control ml-1" >
                                        <div  v-if="errors.no_pendirian"> <div style="color:red">{{errors.no_pendirian[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Nama Notaris  <span style="color:red">*</span></label>
                                        <input name='notaris_pendirian' id="notaris_pendirian" type="text"  v-model="akte_notaris.notaris_pendirian"  :class="{'is-invalid':errors.notaris_pendirian}" class="form-control ml-1" >
                                        <div  v-if="errors.notaris_pendirian"> <div style="color:red">{{errors.notaris_pendirian[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Alamat Notaris <span style="color:red">*</span></label>
                                        <input name='alamat_pendirian' id="alamat_pendirian" type="text" class="form-control ml-1"  v-model="akte_notaris.alamat_pendirian" :class="{'is-invalid':errors.tahap}">
                                        <div  v-if="errors.alamat_pendirian"> <div style="color:red">{{errors.alamat_pendirian[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Provinsi </label>
                                        <select class="form-control" id="provinsi_pendirian" name="provinsi_pendirian"  @change="get_kabupaten_($event)" v-model="akte_notaris.provinsi_pendirian">
                                            <option value=""> - Pilih Provinsi - </option>
                                            <option  v-for="(item, index) in provinsi " :key="index" :value="item.kode_provinsi"> {{item.nama_provinsi}} </option>
                                        </select>
                                        <div  v-if="errors.provinsi_pendirian"> <div style="color:red">{{errors.provinsi_pendirian[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Kabupaten / Kota </label>
                                        <select class="form-control" id="kota_pendirian" name="kota_pendirian" v-model="akte_notaris.kota_pendirian">
                                            <option value=""> - Pilih Kabupaten - </option>
                                            <option  v-for="(item, index) in list_kabupaten_pendirian " :key="index" :value="item.kode_kabupaten"> {{item.nama_kabupaten}} </option>
                                        </select>
                                        <div  v-if="errors.kota_pendirian"> <div style="color:red">{{errors.kota_pendirian[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>



                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="exampleEmail11" class="ml-1"> <h6>  Pengesahan Menkum dan Ham :  </h6> </label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> TGL </label>
                                        <input name='tgl_menkum_pendirian' id="tgl_menkum_pendirian" v-model="akte_notaris.tgl_menkum_pendirian"   type="date"  :class="{'is-invalid':errors.tgl_menkum_pendirian}" class="form-control ml-1">
                                        <div  v-if="errors.tgl_menkum_pendirian"> <div style="color:red">{{errors.tgl_menkum_pendirian[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> NO </label>
                                        <input name='no_menkum_pendirian' id="no_menkum_pendirian" type="text" v-model="akte_notaris.no_menkum_pendirian"   :class="{'is-invalid':errors.no_menkum_pendirian}" class="form-control ml-1">
                                        <div  v-if="errors.no_menkum_pendirian"> <div style="color:red">{{errors.no_menkum_pendirian[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="exampleEmail11" class="ml-1"> <h6>  Pengesahan di Pengadilan Negeri :  </h6> </label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> TGL </label>
                                        <input name='tgl_pendirian_pengadilan' id="tgl_pendirian_pengadilan" v-model="akte_notaris.tgl_pendirian_pengadilan"   type="date"  :class="{'is-invalid':errors.tgl_pendirian_pengadilan}" class="form-control ml-1">
                                        <div  v-if="errors.tgl_pendirian_pengadilan"> <div style="color:red">{{errors.tgl_pendirian_pengadilan[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> NO </label>
                                        <input name='no_pendirian_pengadilan' id="no_pendirian_pengadilan" type="text" v-model="akte_notaris.no_pendirian_pengadilan"   :class="{'is-invalid':errors.no_pendirian_pengadilan}" class="form-control ml-1">
                                        <div  v-if="errors.no_pendirian_pengadilan"> <div style="color:red">{{errors.no_pendirian_pengadilan[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="exampleEmail11" class="ml-1"> <h6>  Lembar Berita Negara :  </h6> </label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> TGL </label>
                                        <input name='tgl_pendirian_negara' id="tgl_pendirian_negara" v-model="akte_notaris.tgl_pendirian_negara"   type="text"  :class="{'is-invalid':errors.tgl_pendirian_negara}" class="form-control ml-1">
                                        <div  v-if="errors.tgl_pendirian_negara"> <div style="color:red">{{errors.tgl_pendirian_negara[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> NO </label>
                                        <input name='no_pendirian_negara' id="no_pendirian_negara" type="text" v-model="akte_notaris.no_pendirian_negara"   :class="{'is-invalid':errors.no_pendirian_negara}" class="form-control ml-1">
                                        <div  v-if="errors.no_pendirian_negara"> <div style="color:red">{{errors.no_pendirian_negara[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h4 > AKTE PERUBAHAN </h4>
                            <hr>    
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Tanggal   <span style="color:red">*</span>
                                        </label>
                                        <input name='tgl_perubahan' id="tgl_perubahan" type="date"  ref="tgl_perubahan"  v-model="akte_notaris.tgl_perubahan" :class="{'is-invalid':errors.tgl_perubahan}" class="form-control ml-1">
                                        <div  v-if="errors.tgl_perubahan"> <div style="color:red">{{errors.tgl_perubahan[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">Nomor<span style="color:red">*</span></label>
                                        <input name='no_perubahan' id="no_perubahan" type="text"  v-model="akte_notaris.no_perubahan"  :class="{'is-invalid':errors.no_perubahan}" class="form-control ml-1" >
                                        <div  v-if="errors.no_perubahan"> <div style="color:red">{{errors.no_perubahan[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Nama Notaris  <span style="color:red">*</span></label>
                                        <input name='notaris_perubahan' id="notaris_perubahan" type="text"  v-model="akte_notaris.notaris_perubahan"  :class="{'is-invalid':errors.notaris_perubahan}" class="form-control ml-1" >
                                        <div  v-if="errors.notaris_perubahan"> <div style="color:red">{{errors.nama_notaris[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Alamat Notaris <span style="color:red">*</span></label>
                                        <input name='alamat_perubahan' id="alamat_perubahan" type="text" class="form-control ml-1"  v-model="akte_notaris.alamat_perubahan" :class="{'is-invalid':errors.tahap}">
                                        <div  v-if="errors.alamat_perubahan"> <div style="color:red">{{errors.alamat_perubahan[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="ml-1 bintang"> Provinsi </label>
                                            <select class="form-control" id="provinsi_perubahan" name="provinsi_perubahan"  @change="get_kabupaten_2($event)" v-model="akte_notaris.provinsi_perubahan">
                                                <option value=""> - Pilih Provinsi - </option>
                                                <option  v-for="(item, index) in provinsi " :key="index" :value="item.kode_provinsi"> {{item.nama_provinsi}} </option>
                                            </select>
                                            <div  v-if="errors.provinsi_perubahan"> <div style="color:red">{{errors.provinsi_perubahan[0]}} </div>    </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="ml-1 bintang"> Kabupaten / Kota </label>
                                            <select class="form-control" id="kota_perubahan" name="kota_perubahan" v-model="akte_notaris.kota_perubahan">
                                                <option value=""> - Pilih Kabupaten - </option>
                                                <option  v-for="(item, index) in list_kabupaten_perubahan " :key="index" :value="item.kode_kabupaten"> {{item.nama_kabupaten}} </option>
                                            </select>
                                            <div  v-if="errors.kota_perubahan"> <div style="color:red">{{errors.kota_perubahan[0]}} </div>    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="exampleEmail11" class="ml-1"> <h6>  Pengesahan Menkum / Persetujuan Menkum / Penerimaan Pemberitahuan Perubahan Data Perseroan :  </h6> </label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> TGL </label>
                                        <input name='tgl_menkum_perubahan' id="tgl_menkum_perubahan" v-model="akte_notaris.tgl_menkum_perubahan"   type="date"  :class="{'is-invalid':errors.tgl_menkum_perubahan}" class="form-control ml-1">
                                        <div  v-if="errors.tgl_menkum_perubahan"> <div style="color:red">{{errors.tgl_menkum_perubahan[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> NO </label>
                                        <input name='no_menkum_perubahan' id="no_menkum_perubahan" type="text" v-model="akte_notaris.no_menkum_perubahan"   :class="{'is-invalid':errors.no_menkum_perubahan}" class="form-control ml-1">
                                        <div  v-if="errors.no_menkum_perubahan"> <div style="color:red">{{errors.no_menkum_perubahan[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="exampleEmail11" class="ml-1"> <h6>  Pengesahan di Pengadilan Negeri :  </h6> </label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> TGL </label>
                                        <input name='tgl_perubahan_pengadilan' id="tgl_perubahan_pengadilan" v-model="akte_notaris.tgl_perubahan_pengadilan"   type="date"  :class="{'is-invalid':errors.tgl_perubahan_pengadilan}" class="form-control ml-1">
                                        <div  v-if="errors.tgl_perubahan_pengadilan"> <div style="color:red">{{errors.tgl_perubahan_pengadilan[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> NO </label>
                                        <input name='no_perubahan_pengadilan' id="no_perubahan_pengadilan" type="text" v-model="akte_notaris.no_perubahan_pengadilan"   :class="{'is-invalid':errors.no_perubahan_pengadilan}" class="form-control ml-1">
                                        <div  v-if="errors.no_perubahan_pengadilan"> <div style="color:red">{{errors.no_perubahan_pengadilan[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="exampleEmail11" class="ml-1"> <h6>  Lembar Berita Negara :  </h6> </label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> TGL </label>
                                        <input name='tgl_perubahan_negara' id="tgl_perubahan_negara" v-model="akte_notaris.tgl_perubahan_negara"   type="date"  :class="{'is-invalid':errors.tgl_perubahan_negara}" class="form-control ml-1">
                                        <div  v-if="errors.tgl_perubahan_negara"> <div style="color:red">{{errors.tgl_perubahan_negara[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> NO </label>
                                        <input name='no_perubahan_negara' id="no_perubahan_negara" type="text" v-model="akte_notaris.no_perubahan_negara"   :class="{'is-invalid':errors.no_perubahan_negara}" class="form-control ml-1">
                                        <div  v-if="errors.no_perubahan_negara"> <div style="color:red">{{errors.no_perubahan_negara[0]}} </div>    </div>
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

    name:"akte_notaris",
    data(){
        return {
            errors:[],
            InActive:false,
            data_show:[],
            data_post:{},
            list_kabupaten_pendirian:[],
            list_kabupaten_perubahan:[],
            akte_notaris:{
             no_kta : this.$route.query.no_kta,
             no_berkas : this.$route.query.no_berkas,
             tgl_pendirian:'',
             no_pendirian:'',
             notaris_pendirian:'',
             alamat_pendirian:'',
             provinsi_pendirian:'',
             kota_pendirian:'',
             tgl_menkum_pendirian:'',
             no_menkum_pendirian:'',
             tgl_pendirian_pengadilan:'',
             no_pendirian_pengadilan:'',
             tgl_pendirian_negara:'',
             no_pendirian_negara:'',
             tgl_perubahan:'',
             no_perubahan:'',
             notaris_perubahan:'',
             alamat_perubahan:'',
             provinsi_perubahan:'',
             kota_perubahan:'',
             tgl_menkum_perubahan:'',
             no_menkum_perubahan:'',
             tgl_perubahan_pengadilan:'',
             no_perubahan_pengadilan:'',
             tgl_perubahan_negara:'',
             no_perubahan_negara:'',

         }        
     }
 }, 

created(){
    var app = this;
    app.get_provinsi();
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
        this.akte_notaris.tgl_pendirian='';
        this.akte_notaris.no_pendirian='';
        this.akte_notaris.notaris_pendirian='';
        this.akte_notaris.alamat_pendirian='';
        this.akte_notaris.provinsi_pendirian='';
        this.akte_notaris.kota_pendirian='';
        this.akte_notaris.tgl_menkum_pendirian='';
        this.akte_notaris.no_menkum_pendirian='';
        this.akte_notaris.tgl_pendirian_pengadilan='';
        this.akte_notaris.no_pendirian_pengadilan='';
        this.akte_notaris.tgl_pendirian_negara='';
        this.akte_notaris.no_pendirian_negara='';
        this.akte_notaris.tgl_perubahan='';
        this.akte_notaris.no_perubahan='';
        this.akte_notaris.notaris_perubahan='';
        this.akte_notaris.alamat_perubahan='';
        this.akte_notaris.provinsi_perubahan='';
        this.akte_notaris.kota_perubahan='';
        this.akte_notaris.tgl_menkum_perubahan='';
        this.akte_notaris.no_menkum_perubahan='';
        this.akte_notaris.tgl_perubahan_pengadilan='';
        this.akte_notaris.no_perubahan_pengadilan='';
        this.akte_notaris.tgl_perubahan_negara='';
        this.akte_notaris.no_perubahan_negara='';
    },


    store_data(e){
        e.preventDefault();
        var app = this;
        app.InActive = true;
        $axios.post(`akte_notaris`,app.akte_notaris).then(function(resp){
            swal('Success','Simpan data berhasil','success');
            app.clear_form();
            app.$router.push('/data-administrasi/detail/'+app.akte_notaris.no_berkas+'/'+app.akte_notaris.no_kta);
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
            this.list_kabupaten_pendirian = this.kabupaten;
        });                
    },
    get_kabupaten_2(e){
        this.get_kabupaten(e.target.value).then(()=>{                    
            this.list_kabupaten_perubahan = this.kabupaten;
        });                
    },



}

}
</script>
