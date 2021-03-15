<template>    
    <div>
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon" style="background:#0069b8;color:#fff">
                        <i class="fa fa-user">
                        </i>
                    </div>
                    <div>Buat Baru Kantor Cabang
                        <div class="page-title-subheading">Form dibawah ini adalah Kantor Cabang untuk pengajuan sertifikasi di  system SBU INKINDO.
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    
                    <button type="button"  title="Example Tooltip" @click="store_data" data-placement="bottom" class="btn-shadow mr-3 btn btn-success">
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
                <loading :active.sync="isLoading" 
                :can-cancel="true" 
                ></loading>
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="exampleEmail11" class="ml-1"> <h5> Kantor Cabang  </h5> </label>
                                    </div>
                                </div>
                                <hr>

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="ml-1 bintang">
                                                Jenis   <span style="color:red">*</span>
                                            </label>
                                            <input name='jenis_kantor' id="jenis_kantor" type="text"  ref="jenis_kantor"  v-model="kantor_cabang.jenis_kantor" :class="{'is-invalid':errors.jenis_kantor}" class="form-control ml-1">
                                            <div  v-if="errors.jenis_kantor"> <div style="color:red">{{errors.jenis_kantor[0]}} </div>    </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="ml-1 bintang"> Alamat  <span style="color:red">*</span></label>
                                            <input name='alamat' id="alamat" type="text"  v-model="kantor_cabang.alamat"  :class="{'is-invalid':errors.alamat}" class="form-control ml-1" >
                                            <div  v-if="errors.alamat"> <div style="color:red">{{errors.alamat[0]}} </div>    </div>
                                        </div>
                                    </div>
                                </div>                            
                                

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="ml-1 bintang">
                                                Provinsi   
                                            </label>
                                            <select class="form-control" id="provinsi" name="provinsi" @change="get_kabupaten_($event)"  v-model="kantor_cabang.kode_provinsi">
                                                <option value=""> - Pilih Provinsi - </option>
                                                <option  v-for="(item, index) in provinsi " :key="index" :value="item.kode_provinsi"> {{item.nama_provinsi}} </option>
                                            </select>
                                            <div  v-if="errors.kode_provinsi"> <div style="color:red">{{errors.kode_provinsi[0]}} </div>    </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="ml-1 bintang"> Kota / Kabupaten </label>
                                            <select class="form-control" id="kabupaten" name="kabupaten"  v-model="kantor_cabang.kode_kabupaten">
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
                                            <label for="exampleEmail11" class="ml-1 bintang">
                                                Kode Pos   
                                            </label>
                                            <input name='kode_pos' id="kode_pos" type="text"  ref="kode_pos"  v-model="kantor_cabang.kode_pos" :class="{'is-invalid':errors.kode_pos}" class="form-control ml-1">
                                            <div  v-if="errors.kode_pos"> <div style="color:red">{{errors.kode_pos[0]}} </div>    </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="ml-1 bintang"> Telepon </label>
                                            <input name='telepon' id="telepon" type="text"  v-model="kantor_cabang.telepon"  :class="{'is-invalid':errors.telepon}" class="form-control ml-1" >
                                            <div  v-if="errors.telepon"> <div style="color:red">{{errors.telepon[0]}} </div>    </div>
                                        </div>
                                    </div>
                                </div>                            
                                

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="ml-1 bintang">
                                                Kapasitas   
                                            </label>
                                            <input name='kapasitas' id="kapasitas" type="text"  ref="kapasitas"  v-model="kantor_cabang.kapasitas" :class="{'is-invalid':errors.kapasitas}" class="form-control ml-1">
                                            <div  v-if="errors.kapasitas"> <div style="color:red">{{errors.kapasitas[0]}} </div>    </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="ml-1 bintang"> Luas </label>
                                            <input name='luas' id="luas" type="text"  v-model="kantor_cabang.luas"  :class="{'is-invalid':errors.luas}" class="form-control ml-1" >
                                            <div  v-if="errors.luas"> <div style="color:red">{{errors.luas[0]}} </div>    </div>
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

    name:"kantor_cabang",
    data(){
        return {
            errors:[],
            InActive:false,
            data_show:[],
            data_post:{},
            isLoading: true,
            list_kabupaten:[],
            kantor_cabang:{
                jenis_kantor:'',
                no_kta : this.$route.query.no_kta,
                no_berkas : this.$route.query.no_berkas,
                alamat :'',
                kode_provinsi:'',
                kode_kabupaten:'',
                kode_pos:'',
                telepon:'',
                fax:'',
                kapasitas:'',
                luas:'',
            }        
        }
    }, 

    created(){
        var app = this;
        app.clear_form();
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
            this.isLoading = false;
            this.kantor_cabang.jenis_kantor='';
            this.kantor_cabang.alamat ='';
            this.kantor_cabang.kode_provinsi='';
            this.kantor_cabang.kode_kabupaten='';
            this.kantor_cabang.kode_pos='';
            this.kantor_cabang.telepon='';
            this.kantor_cabang.fax='';
            this.kantor_cabang.kapasitas='';
            this.kantor_cabang.luas='';

        },


        store_data(e){
            e.preventDefault();
            var app = this;
            app.InActive = true;
            $axios.post(`kantor_cabang`,app.kantor_cabang).then(function(resp){
                swal('Success','Simpan data berhasil','success');
                app.clear_form();
                app.$router.push('/data-administrasi/detail/'+app.kantor_cabang.no_berkas+'/'+app.kantor_cabang.no_kta);
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
