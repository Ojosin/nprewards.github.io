<template>    
    <div>
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon" style="background:#0069b8;color:#fff">
                        <i class="fa fa-user">
                        </i>
                    </div>
                    <div>Buat Baru Personil
                        <div class="page-title-subheading">Form dibawah ini adalah Personil untuk pengajuan sertifikasi di  system SBU INKINDO.
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
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h4 > DATA PRIBADI </h4>
                            <hr>    
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Nama   <span style="color:red">*</span>
                                        </label>
                                        <input name='nama' id="nama" type="text"  ref="nama"  v-model="personil.nama" :class="{'is-invalid':errors.nama}" class="form-control ml-1">
                                        <div  v-if="errors.nama"> <div style="color:red">{{errors.nama[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">Jenis Tenaga<span style="color:red">*</span></label>
                                        <input name='jenis_tenaga' id="jenis_tenaga" type="text"  v-model="personil.jenis_tenaga"  :class="{'is-invalid':errors.jenis_tenaga}" class="form-control ml-1" >
                                        <div  v-if="errors.jenis_tenaga"> <div style="color:red">{{errors.jenis_tenaga[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Kab / Kota Kelahiran  <span style="color:red">*</span></label>
                                        <input name='kelahiran' id="kelahiran" type="text"  v-model="personil.kelahiran"  :class="{'is-invalid':errors.kelahiran}" class="form-control ml-1" >
                                        <div  v-if="errors.kelahiran"> <div style="color:red">{{errors.kelahiran[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> No KTP <span style="color:red">*</span></label>
                                        <input name='no_ktp' id="no_ktp" type="text" class="form-control ml-1"  v-model="personil.no_ktp" :class="{'is-invalid':errors.tahap}">
                                        <div  v-if="errors.no_ktp"> <div style="color:red">{{errors.no_ktp[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Tanggal Lahir </label>
                                        <input name='tgl_lahir' id="tgl_lahir" v-model="personil.tgl_lahir"   type="text"  :class="{'is-invalid':errors.tgl_lahir}" class="form-control ml-1">
                                        <div  v-if="errors.tgl_lahir"> <div style="color:red">{{errors.tgl_lahir[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Kebangsaan  </label>
                                        <input name='kebangsaan' id="kebangsaan" type="text" v-model="personil.kebangsaan"   :class="{'is-invalid':errors.kebangsaan}" class="form-control ml-1">
                                        <div  v-if="errors.kebangsaan"> <div style="color:red">{{errors.kebangsaan[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Jabatan </label>
                                        <input name='jabatan' id="jabatan" v-model="personil.jabatan"   type="text"  :class="{'is-invalid':errors.jabatan}" class="form-control ml-1">
                                        <div  v-if="errors.jabatan"> <div style="color:red">{{errors.jabatan[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Agama  </label>
                                        <input name='agama' id="agama" type="text" v-model="personil.agama"   :class="{'is-invalid':errors.agama}" class="form-control ml-1">
                                        <div  v-if="errors.agama"> <div style="color:red">{{errors.agama[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Alamat </label>
                                        <input name='alamat' id="alamat" v-model="personil.alamat"   type="text"  :class="{'is-invalid':errors.alamat}" class="form-control ml-1">
                                        <div  v-if="errors.alamat"> <div style="color:red">{{errors.alamat[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Provinsi  </label>
                                        <select class="form-control" id="provinsi" name="provinsi" @change="get_kabupaten_($event)"  v-model="personil.kode_provinsi">
                                            <option value=""> - Pilih Provinsi - </option>
                                            <option  v-for="(item, index) in provinsi " :key="index" :value="item.kode_provinsi"> {{item.nama_provinsi}} </option>
                                        </select>
                                        <div  v-if="errors.kode_provinsi"> <div style="color:red">{{errors.kode_provinsi[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Kabupaten / Kota </label>
                                        <select class="form-control" id="kabupaten" name="kabupaten"  v-model="personil.kode_kabupaten">
                                            <option value=""> - Pilih Kabupaten - </option>
                                            <option  v-for="(item, index) in list_kabupaten " :key="index" :value="item.kode_kabupaten"> {{item.nama_kabupaten}} </option>
                                        </select>
                                        <div  v-if="errors.kode_kabupaten"> <div style="color:red">{{errors.kode_kabupaten[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Kode Pos  </label>
                                        <input name='kode_pos' id="kode_pos" type="text" v-model="personil.kode_pos"   :class="{'is-invalid':errors.kode_pos}" class="form-control ml-1">
                                        <div  v-if="errors.kode_pos"> <div style="color:red">{{errors.kode_pos[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="exampleEmail11" class="ml-1"> <h6 style="font-weight:bold">  Kode Bidang /  Layanan :  </h6> </label>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            PJ Bidang / Layanan 1   <span style="color:red">*</span>
                                        </label>
                                        <input name='layanan_1' id="layanan_1" type="text"  ref="layanan_1"  v-model="personil.layanan_1" :class="{'is-invalid':errors.layanan_1}" class="form-control ml-1">
                                        <div  v-if="errors.layanan_1"> <div style="color:red">{{errors.layanan_1[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">PJ Bidang / Layanan 2<span style="color:red">*</span></label>
                                        <input name='layanan_2' id="layanan_2" type="text"  v-model="personil.layanan_2"  :class="{'is-invalid':errors.layanan_2}" class="form-control ml-1" >
                                        <div  v-if="errors.layanan_2"> <div style="color:red">{{errors.layanan_2[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="exampleEmail11" class="ml-1"> <h6 style="font-weight:bold">  Kode SubBidang / Sub Layanan :  </h6> </label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> SubBidang / Sub Layanan  1</label>
                                        <input name='sublayanan_1' id="sublayanan_1" v-model="personil.sublayanan_1"   type="text"  :class="{'is-invalid':errors.sublayanan_1}" class="form-control ml-1">
                                        <div  v-if="errors.sublayanan_1"> <div style="color:red">{{errors.sublayanan_1[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> SubBidang / Sub Layanan  2 </label>
                                        <input name='sublayanan_2' id="sublayanan_2" type="text" v-model="personil.sublayanan_2"   :class="{'is-invalid':errors.sublayanan_2}" class="form-control ml-1">
                                        <div  v-if="errors.sublayanan_2"> <div style="color:red">{{errors.sublayanan_2[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> SubBidang / Sub Layanan  3</label>
                                        <input name='sublayanan_3' id="sublayanan_3" v-model="personil.sublayanan_3"   type="text"  :class="{'is-invalid':errors.sublayanan_3}" class="form-control ml-1">
                                        <div  v-if="errors.sublayanan_3"> <div style="color:red">{{errors.sublayanan_3[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> SubBidang / Sub Layanan  4 </label>
                                        <input name='sublayanan_4' id="sublayanan_4" type="text" v-model="personil.sublayanan_4"   :class="{'is-invalid':errors.sublayanan_4}" class="form-control ml-1">
                                        <div  v-if="errors.sublayanan_4"> <div style="color:red">{{errors.sublayanan_4[0]}} </div>    </div>
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

    name:"personil",
    data(){
        return {
            errors:[],
            InActive:false,
            data_show:[],
            list_kabupaten:[],
            data_post:{},
            personil:{
                no_kta : this.$route.query.no_kta,
                no_berkas : this.$route.query.no_berkas,
                nama:'',
                jenis_tenaga:'',
                kelahiran:'',
                no_ktp:'',
                tgl_lahir:'',
                kebangsaan:'',
                jabatan:'',
                agama:'',
                alamat:'',
                kode_provinsi:'',
                kode_kabupaten:'',
                kode_pos:'',
                layanan_1:'',
                layanan_2:'',
                sublayanan_1:'',
                sublayanan_2:'',
                sublayanan_3:'',
                sublayanan_4:'',
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
            this.personil.nama="";
            this.personil.jenis_tenaga="";
            this.personil.kelahiran="";
            this.personil.no_ktp="";
            this.personil.tgl_lahir="";
            this.personil.kebangsaan="";
            this.personil.jabatan="";
            this.personil.agama="";
            this.personil.alamat="";
            this.personil.kode_provinsi="";
            this.personil.kode_kabupaten="";
            this.personil.kode_pos="";
            this.personil.layanan_1="";
            this.personil.layanan_2="";
            this.personil.sublayanan_1="";
            this.personil.sublayanan_2="";
            this.personil.sublayanan_3="";
            this.personil.sublayanan_4="";
        },


        store_data(e){
            e.preventDefault();
            var app = this;
            app.InActive = true;
            $axios.post(`personil`,app.personil).then(function(resp){
                swal('Success','Simpan data berhasil','success');
                app.clear_form();
                app.$router.push('/data-administrasi/detail/'+app.personil.no_berkas+'/'+app.personil.no_kta);
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
