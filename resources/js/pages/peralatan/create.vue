<template>    
    <div>
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon" style="background:#0069b8;color:#fff">
                        <i class="fa fa-user">
                        </i>
                    </div>
                    <div>Buat Baru Peralatan
                        <div class="page-title-subheading">Form dibawah ini adalah Peralatan untuk pengajuan sertifikasi di  system SBU INKINDO.
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
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="exampleEmail11" class="ml-1"> <h5> Peralatan  </h5> </label>
                                </div>
                            </div>
                            <hr>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Jenis   <span style="color:red">*</span>
                                        </label>
                                        <input name='jenis' id="jenis" type="text"  ref="jenis"  v-model="peralatan.jenis" :class="{'is-invalid':errors.jenis}" class="form-control ml-1">
                                        <div  v-if="errors.jenis"> <div style="color:red">{{errors.jenis[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Jumlah  <span style="color:red">*</span></label>
                                        <input name='jumlah' id="jumlah" type="text"  v-model="peralatan.jumlah"  :class="{'is-invalid':errors.jumlah}" class="form-control ml-1" >
                                        <div  v-if="errors.jumlah"> <div style="color:red">{{errors.jumlah[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>                            


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Kapasitas   <span style="color:red">*</span>
                                        </label>
                                        <input name='kapasitas' id="kapasitas" type="text"  ref="kapasitas"  v-model="peralatan.kapasitas" :class="{'is-invalid':errors.kapasitas}" class="form-control ml-1">
                                        <div  v-if="errors.kapasitas"> <div style="color:red">{{errors.kapasitas[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Merk <span style="color:red">*</span></label>
                                        <input name='merk' id="merk" type="text"  v-model="peralatan.merk"  :class="{'is-invalid':errors.merk}" class="form-control ml-1" >
                                        <div  v-if="errors.merk"> <div style="color:red">{{errors.merk[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>                            

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Nomor   
                                        </label>
                                        <input name='nomor' id="nomor" type="text"  ref="nomor"  v-model="peralatan.nomor" :class="{'is-invalid':errors.nomor}" class="form-control ml-1">
                                        <div  v-if="errors.nomor"> <div style="color:red">{{errors.nomor[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Tahun </label>
                                        <input name='tahun' id="tahun" type="text"  v-model="peralatan.tahun"  :class="{'is-invalid':errors.tahun}" class="form-control ml-1" >
                                        <div  v-if="errors.tahun"> <div style="color:red">{{errors.tahun[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>                            


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Kondisi   
                                        </label>
                                        <input name='kondisi' id="kondisi" type="text"  ref="kondisi"  v-model="peralatan.kondisi" :class="{'is-invalid':errors.kondisi}" class="form-control ml-1">
                                        <div  v-if="errors.kondisi"> <div style="color:red">{{errors.kondisi[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Lokasi </label>
                                        <input name='lokasi' id="lokasi" type="text"  v-model="peralatan.lokasi"  :class="{'is-invalid':errors.lokasi}" class="form-control ml-1" >
                                        <div  v-if="errors.lokasi"> <div style="color:red">{{errors.lokasi[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>                            


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Harga   
                                        </label>
                                        <input name='harga' id="harga" type="text"  ref="harga"  v-model="peralatan.harga" :class="{'is-invalid':errors.harga}" class="form-control ml-1">
                                        <div  v-if="errors.harga"> <div style="color:red">{{errors.harga[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Kepemilikan </label>
                                        <input name='kepemilikan' id="kepemilikan" type="text"  v-model="peralatan.kepemilikan"  :class="{'is-invalid':errors.kepemilikan}" class="form-control ml-1" >
                                        <div  v-if="errors.kepemilikan"> <div style="color:red">{{errors.kepemilikan[0]}} </div>    </div>
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
            errors:[],
            InActive:false,
            data_show:[],
            data_post:{},
            peralatan:{
                no_kta : this.$route.query.no_kta,
                no_berkas : this.$route.query.no_berkas,
                jumlah:'',
                kapasitas:'',
                nomor:'',
                tahun:'',
                kondisi:'',
                lokasi:'',
                harga:'',
                kepemilikan:'',
            }        
        }
    }, 

    created(){
        var app = this;
    },
    methods:{

        clear_form(){
            this.peralatan.jumlah='';
            this.peralatan.kode_anggota='';
            this.peralatan.kapasitas='';
            this.peralatan.nomor='';
            this.peralatan.tahun='';
            this.peralatan.kondisi='';
            this.peralatan.lokasi='';
            this.peralatan.harga='';
            this.peralatan.kepemilikan='';
        },


        store_data(e){
            e.preventDefault();
            var app = this;
            app.InActive = true;
            $axios.post(`peralatan`,app.peralatan).then(function(resp){
                swal('Success','Simpan data berhasil','success');
                app.clear_form();
                app.$router.push('/data-administrasi/detail/'+app.peralatan.no_berkas+'/'+app.peralatan.no_kta);
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
