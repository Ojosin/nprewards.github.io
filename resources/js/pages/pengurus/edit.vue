<template>    
    <div>
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon" style="background:#0069b8;color:#fff">
                        <i class="fa fa-user">
                        </i>
                    </div>
                    <div>Edit Pengurus
                        <div class="page-title-subheading">Form dibawah ini adalah Pengurus untuk pengajuan sertifikasi di  system SBU INKINDO.
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
                        <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h4 > PENGURUS BADAN USAHA </h4>
                            <hr>    
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Nama   <span style="color:red">*</span>
                                        </label>
                                        <input name='nama' id="nama" type="text"  ref="nama"  v-model="pengurus.nama" :class="{'is-invalid':errors.nama}" class="form-control ml-1">
                                        <div  v-if="errors.nama"> <div style="color:red">{{errors.nama[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Alamat <span style="color:red">*</span></label>
                                        <input name='alamat' id="alamat" type="text"  v-model="pengurus.alamat"  :class="{'is-invalid':errors.alamat}" class="form-control ml-1" >
                                        <div  v-if="errors.alamat"> <div style="color:red">{{errors.alamat[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Provinsi  </label>
                                        <select class="form-control" id="provinsi" name="provinsi" @change="get_kabupaten_($event)"  v-model="pengurus.kode_provinsi">
                                            <option value=""> - Pilih Provinsi - </option>
                                            <option  v-for="(item, index) in provinsi " :key="index" :value="item.kode_provinsi"> {{item.nama_provinsi}} </option>
                                        </select>
                                        <div  v-if="errors.kode_provinsi"> <div style="color:red">{{errors.kode_provinsi[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Kabupaten / Kota </label>

                                        <select class="form-control" id="kabupaten" name="kabupaten"  v-model="pengurus.kode_kabupaten">
                                            <option value=""> - Pilih Kabupaten - </option>
                                            <option  v-for="(item, index) in list_kabupaten " :key="index" :value="item.kode_kabupaten"> {{item.nama_kabupaten}} </option>
                                        </select>
                                        <div  v-if="errors.kode_kabupaten"> <div style="color:red">{{errors.kode_kabupaten[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Kode Pos  </label>
                                        <input name='kode_pos' id="kode_pos" type="text" v-model="pengurus.kode_pos"   :class="{'is-invalid':errors.kode_pos}" class="form-control ml-1">
                                        <div  v-if="errors.kode_pos"> <div style="color:red">{{errors.kode_pos[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Jabatan </label>
                                        <!-- <input name='jabatan' id="jabatan" v-model="pengurus.jabatan"   type="text"  :class="{'is-invalid':errors.jabatan}" class="form-control ml-1"> -->
                                         <select class="form-control" id="jabatan" name="jabatan" v-model="pengurus.jabatan">
                                            <option value=""> - Pilih Jabatan - </option>
                                            <option  v-for="(item, index) in jabatan " :key="index" :value="item.id_jabatan"> {{item.nama_jabatan}} </option>
                                        </select>
                                        <div  v-if="errors.jabatan"> <div style="color:red">{{errors.jabatan[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>





                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Kab / Kota Kelahiran  <span style="color:red">*</span></label>
                                        <input name='kelahiran' id="kelahiran" type="text"  v-model="pengurus.kelahiran"  :class="{'is-invalid':errors.kelahiran}" class="form-control ml-1" >
                                        <div  v-if="errors.kelahiran"> <div style="color:red">{{errors.kelahiran[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Tanggal Lahir </label>
                                        <input name='tgl_lahir' id="tgl_lahir" v-model="pengurus.tgl_lahir"   type="date"  :class="{'is-invalid':errors.tgl_lahir}" class="form-control ml-1">
                                        <div  v-if="errors.tgl_lahir"> <div style="color:red">{{errors.tgl_lahir[0]}} </div>    </div>
                                    </div>
                                </div>
                               
                            </div>





                            <div class="form-row">
                                 <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> No KTP <span style="color:red">*</span></label>
                                        <input name='no_ktp' id="no_ktp" type="text" class="form-control ml-1"  v-model="pengurus.no_ktp" :class="{'is-invalid':errors.tahap}">
                                        <div  v-if="errors.no_ktp"> <div style="color:red">{{errors.no_ktp[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Kebangsaan  </label>
                                        <select class="form-control" id="kebangsaan" name="kebangsaan" v-model="pengurus.kebangsaan">
                                            <option value=""> - Pilih kebangsaan - </option>
                                            <option  v-for="(item, index) in negara " :key="index" :value="item.id_negara"> {{item.nama_negara}} </option>
                                        </select>
                                        <div  v-if="errors.kebangsaan"> <div style="color:red">{{errors.kebangsaan[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>



                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Pendidikan  </label>
                                        <select class="form-control" id="pendidikan" name="pendidikan" v-model="pengurus.pendidikan">
                                            <option value=""> - Pilih pendidikan - </option>
                                            <option  v-for="(item, index) in pendidikan " :key="index" :value="item.id_pendidikan"> {{item.nama_pendidikan}} </option>
                                        </select>
                                        <div  v-if="errors.pendidikan"> <div style="color:red">{{errors.pendidikan[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Tahun Lulus  </label>
                                        <input name='tahun_lulus' id="tahun_lulus" type="text"  v-model="pengurus.tahun_lulus"   :class="{'is-invalid':errors.tahun_lulus}" class="form-control ml-1">
                                        <div  v-if="errors.tahun_lulus"> <div style="color:red">{{errors.tahun_lulus[0]}} </div>    </div>
                                    </div>
                                </div>
                                 <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Photo  </label>
                                        <input name='photo' id="photo" type="file"    :class="{'is-invalid':errors.photo}" class="form-control ml-1">
                                        <div  v-if="errors.photo"> <div style="color:red">{{errors.photo[0]}} </div>    </div>
                                    </div>
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
            list_kabupaten:[],
            data_post:{},
            pengurus:{
                no_kta : this.$route.query.no_kta,
                no_berkas : this.$route.query.no_berkas,
                id_pengurus:'',
                nama:'',
                kelahiran:'',
                no_ktp:'',
                tgl_lahir:'',
                photo:'',
                kebangsaan:'',
                jabatan:'',
                agama:'',
                alamat:'',
                kode_provinsi:'',
                kode_kabupaten:'',
                kode_pos:'',
                tahun_lulus:'',
                pendidikan:'',
            }       
        }
    }, 

    created(){
        var app = this;
        app.get_provinsi();
        app.get_jabatan();
        app.get_pendidikan();
        app.get_negara();
    },
    mounted(){
        this.edit_pengurus();
    },
    computed:{
        ...mapState('application',{
            provinsi:state=>state.provinsi,
            kabupaten:state=>state.kabupaten,
            jabatan:state=>state.jabatan,
            pendidikan:state=>state.pendidikan,
            negara:state=>state.negara,
        })
    },
    methods:{
        ...mapActions('application',['get_provinsi','get_kabupaten','get_jabatan','get_pendidikan','get_negara']),

        clear_form(){
            this.pengurus.nama=''
            this.pengurus.kode_jabatan=''
            this.pengurus.kelahiran=''
            this.pengurus.no_ktp=''
            this.pengurus.tgl_lahir=''
            this.pengurus.photo=''
            this.pengurus.kebangsaan=''
            this.pengurus.jabatan=''
            this.pengurus.agama=''
            this.pengurus.alamat=''
            this.pengurus.kode_provinsi=''
            this.pengurus.kode_kabupaten=''
            this.pengurus.kode_pos=''
            this.pengurus.tahun_lulus='';
            this.pengurus.pendidikan='';
        },

        update_data(e){

            e.preventDefault();
            var app = this;
            app.InActive = true;
            $axios.put('/pengurus/'+app.pengurus.id_pengurus,app.pengurus).then(function(resp){
                swal('Success','Ubah data berhasil','success');
                app.clear_form();
                app.$router.push('/data-administrasi/detail/'+app.pengurus.no_berkas+'/'+app.pengurus.no_kta);
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
        edit_pengurus(){
            var app = this;
            var id =  app.$route.params.id;

            $axios.get('pengurus/'+id+'/edit')
            .then(function(resp){
                app.pengurus.id_pengurus=resp.data.id_pengurus;
                app.pengurus.nama=resp.data.nama;
                app.pengurus.kelahiran=resp.data.kelahiran;
                app.pengurus.no_ktp=resp.data.no_ktp;
                app.pengurus.tgl_lahir=resp.data.tgl_lahir;
                app.pengurus.photo=resp.data.photo;
                app.pengurus.kebangsaan=resp.data.kebangsaan;
                app.pengurus.jabatan=resp.data.jabatan;
                app.pengurus.agama=resp.data.agama;
                app.pengurus.alamat=resp.data.alamat;
                app.pengurus.kode_provinsi=resp.data.kode_provinsi;
                app.pengurus.kode_kabupaten=resp.data.kode_kabupaten;
                app.pengurus.kode_pos=resp.data.kode_pos;
                app.pengurus.tahun_lulus=resp.data.tahun_lulus;
                app.pengurus.pendidikan=resp.data.pendidikan;
                app.get_kabupaten(resp.data.kode_provinsi)
                .then(function(res){
                    app.list_kabupaten = res;
                });
                // app.get_jabatan_by_id(resp.data.jabatan);
                // app.get_pendidikan_by_id(resp.data.pendidikan);
                // app.get_negara_by_id(resp.data.kebangsaan);
                // .then(function(res){
                //     app.jabatan_by_id = res;
                // });

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
