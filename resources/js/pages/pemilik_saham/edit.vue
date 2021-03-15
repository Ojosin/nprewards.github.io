<template>    
    <div>
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon" style="background:#0069b8;color:#fff">
                        <i class="fa fa-user">
                        </i>
                    </div>
                    <div>Edit Pemilik Saham
                        <div class="page-title-subheading">Form dibawah ini adalah Pemilik Saham untuk pengajuan sertifikasi di  system SBU INKINDO.
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
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="exampleEmail11" class="ml-1"> <h5> Pemilik Saham :  </h5> </label>
                            </div>
                        </div>
                        <hr>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="exampleEmail11" class="ml-1 bintang">
                                        Nama   <span style="color:red">*</span>
                                    </label>
                                    <input name='nama' id="nama" type="text"  ref="nama"  v-model="pemilik_saham.nama" :class="{'is-invalid':errors.nama}" class="form-control ml-1">
                                    <div  v-if="errors.nama"> <div style="color:red">{{errors.nama[0]}} </div>    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="exampleEmail11" class="ml-1 bintang"> Jenis Pemilik  <span style="color:red">*</span></label>
                                    <input name='jenis_pemilik' id="jenis_pemilik" type="text"  v-model="pemilik_saham.jenis_pemilik"  :class="{'is-invalid':errors.jenis_pemilik}" class="form-control ml-1" >
                                    <div  v-if="errors.jenis_pemilik"> <div style="color:red">{{errors.jenis_pemilik[0]}} </div>    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="exampleEmail11" class="ml-1 bintang"> Alamat  <span style="color:red">*</span></label>
                                    <input name='alamat' id="alamat" type="text"  v-model="pemilik_saham.alamat"  :class="{'is-invalid':errors.alamat}" class="form-control ml-1" >
                                    <div  v-if="errors.alamat"> <div style="color:red">{{errors.alamat[0]}} </div>    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="examplePassword11" class="ml-1 bintang"> Provinsi <span style="color:red">*</span></label>
                                    <select class="form-control" id="kode_provinsi" name="kode_provinsi"  @change="get_kabupaten_($event)" v-model="pemilik_saham.kode_provinsi">
                                        <option value=""> - Pilih Provinsi - </option>
                                        <option  v-for="(item, index) in provinsi " :key="index" :value="item.kode_provinsi"> {{item.nama_provinsi}} </option>
                                    </select>                                    <div  v-if="errors.kode_provinsi"> <div style="color:red">{{errors.kode_provinsi[0]}} </div>    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="exampleEmail11" class="ml-1 bintang"> Kota / Kabupaten  </label>
                                    <select class="form-control" id="kode_kabupaten" name="kode_kabupaten" v-model="pemilik_saham.kode_kabupaten">
                                        <option value=""> - Pilih Kabupaten - </option>
                                        <option  v-for="(item, index) in list_kabupaten " :key="index" :value="item.kode_kabupaten"> {{item.nama_kabupaten}} </option>
                                    </select>
                                    <div  v-if="errors.kabupaten"> <div style="color:red">{{errors.kabupaten[0]}} </div>    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="examplePassword11" class="ml-1 bintang"> Kode Pos  </label>
                                    <input name='kode_pos' id="kode_pos" type="text" v-model="pemilik_saham.kode_pos"   :class="{'is-invalid':errors.kode_pos}" class="form-control ml-1">
                                    <div  v-if="errors.kode_pos"> <div style="color:red">{{errors.kode_pos[0]}} </div>    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="exampleEmail11" class="ml-1 bintang"> Negara </label>
                                    <input name='negara' id="negara" v-model="pemilik_saham.negara"   type="text"  :class="{'is-invalid':errors.negara}" class="form-control ml-1">
                                    <div  v-if="errors.negara"> <div style="color:red">{{errors.negara[0]}} </div>    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="examplePassword11" class="ml-1 bintang"> No KTP / Passport  </label>
                                    <input name='no_ktp' id="no_ktp" type="text" v-model="pemilik_saham.no_ktp"   :class="{'is-invalid':errors.no_ktp}" class="form-control ml-1">
                                    <div  v-if="errors.no_ktp"> <div style="color:red">{{errors.no_ktp[0]}} </div>    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="exampleEmail11" class="ml-1 bintang"> Jumlah Lembar Saham </label>
                                    <input name='jumlah_lembar_saham' id="jumlah_lembar_saham" v-model="pemilik_saham.jumlah_lembar_saham"   type="text"  :class="{'is-invalid':errors.jumlah_lembar_saham}" class="form-control ml-1">
                                    <div  v-if="errors.jumlah_lembar_saham"> <div style="color:red">{{errors.jumlah_lembar_saham[0]}} </div>    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="examplePassword11" class="ml-1 bintang"> Nilai Saham  </label>
                                    <input name='nilai_saham' id="nilai_saham" type="text" v-model="pemilik_saham.nilai_saham"   :class="{'is-invalid':errors.nilai_saham}" class="form-control ml-1">
                                    <div  v-if="errors.nilai_saham"> <div style="color:red">{{errors.nilai_saham[0]}} </div>    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="exampleEmail11" class="ml-1 bintang"> Modal Dasar </label>
                                    <input name='modal_dasar' id="modal_dasar" v-model="pemilik_saham.modal_dasar"   type="text"  :class="{'is-invalid':errors.modal_dasar}" class="form-control ml-1">
                                    <div  v-if="errors.modal_dasar"> <div style="color:red">{{errors.modal_dasar[0]}} </div>    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="examplePassword11" class="ml-1 bintang"> Modal Disetor  </label>
                                    <input name='modal_disetor' id="modal_disetor" type="text" v-model="pemilik_saham.modal_disetor"   :class="{'is-invalid':errors.modal_disetor}" class="form-control ml-1">
                                    <div  v-if="errors.modal_disetor"> <div style="color:red">{{errors.modal_disetor[0]}} </div>    </div>
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
            pemilik_saham:{
                no_kta : this.$route.query.no_kta,
                no_berkas : this.$route.query.no_berkas,
                jenis_pemilik:'',
                alamat:'',
                kode_provinsi:'',
                kode_kabupaten:'',
                nama:'',
                kode_pos:'',
                negara:'',
                no_ktp:'',
                jumlah_lembar_saham:'',
                nilai_saham:'',
                modal_dasar:'',
                modal_disetor:'',
                id_pemilik_saham:'',
            }      
        }
    }, 

    created(){
        var app = this;
        app.get_provinsi();
    },
    mounted(){
        this.edit_pemilik_saham();
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
            this.pemilik_saham.jenis_pemilik='';
            this.pemilik_saham.alamat='';
            this.pemilik_saham.kode_provinsi='';
            this.pemilik_saham.kode_kabupaten='';
            this.pemilik_saham.nama='';
            this.pemilik_saham.kode_pos='';
            this.pemilik_saham.negara='';
            this.pemilik_saham.no_ktp='';
            this.pemilik_saham.jumlah_lembar_saham='';
            this.pemilik_saham.nilai_saham='';
            this.pemilik_saham.modal_dasar='';
            this.pemilik_saham.modal_disetor='';
        },


        update_data(e){

            e.preventDefault();
            var app = this;
            app.InActive = true;
            $axios.put('/pemilik_saham/'+app.pemilik_saham.id_pemilik_saham,app.pemilik_saham).then(function(resp){
                swal('Success','Ubah data berhasil','success');
                app.clear_form();
                app.$router.push('/data-administrasi/detail/'+app.pemilik_saham.no_berkas+'/'+app.pemilik_saham.no_kta);
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
        edit_pemilik_saham(){
            var app = this;
            var id =  app.$route.params.id;

            $axios.get('pemilik_saham/'+id+'/edit')
            .then(function(resp){
                app.pemilik_saham.id_pemilik_saham = resp.data.id_pemilik_saham;
                app.pemilik_saham.jenis_pemilik=resp.data.jenis_pemilik;
                app.pemilik_saham.alamat=resp.data.alamat;
                app.pemilik_saham.kode_provinsi=resp.data.kode_provinsi;
                app.pemilik_saham.kode_kabupaten=resp.data.kode_kabupaten;
                app.pemilik_saham.nama=resp.data.nama;
                app.pemilik_saham.kode_pos=resp.data.kode_pos;
                app.pemilik_saham.negara=resp.data.negara;
                app.pemilik_saham.no_ktp=resp.data.no_ktp;
                app.pemilik_saham.jumlah_lembar_saham=resp.data.jumlah_lembar_saham;
                app.pemilik_saham.nilai_saham=resp.data.nilai_saham;
                app.pemilik_saham.modal_dasar=resp.data.modal_dasar;
                app.pemilik_saham.modal_disetor=resp.data.modal_disetor;
                app.get_kabupaten(resp.data.kode_provinsi).then(function(res){
                    app.list_kabupaten = res;
                });
            })
            .catch(function(resp){

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
