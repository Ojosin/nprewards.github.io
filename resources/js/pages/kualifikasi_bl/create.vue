<template>    
    <div>
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon" style="background:#0069b8;color:#fff">
                        <i class="fa fa-user">
                        </i>
                    </div>
                    <div>Buat Baru Kualifikasi Bidang Layanan
                        <div class="page-title-subheading">Form dibawah ini adalah Kualifikasi Bidang Layanan untuk pengajuan sertifikasi di  system SBU INKINDO.
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
                            <h4 > Kualifikasi Bidang Layanan </h4>
                            <hr>    
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Kode BL   <span style="color:red">*</span>
                                        </label>
                                        <select class="form-control" id="kode_bl" name="kode_bl" :class="{'is-invalid':errors.kode_bl}"  v-model="kualifikasi_bl.kode_bl">
                                            <option value=""> - Pilih BL - </option>
                                            <option  v-for="(item, index) in klasifikasi_bl" :key="index" :value="item.id_klasifikasi_bl"> {{item.kode_bl}} - {{item.keterangan}} </option>
                                        </select>
                                        <div  v-if="errors.kode_bl"> <div style="color:red">{{errors.kode_bl[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> KUAL<span style="color:red">*</span></label>
                                         <select class="form-control" id="kual" name="kual" :class="{'is-invalid':errors.kual}"  v-model="kualifikasi_bl.kual">
                                            <option value=""> - Pilih KUAL - </option>
                                            <option  v-for="(item, index) in kualifikasi_bu" :key="index" :value="item.id_kualifikasi_bu"> {{item.nama_kualifikasi_bu}} - {{item.keterangan}} </option>
                                        </select>

<!--                                         <input name='kual' id="kual" type="text"  v-model="kualifikasi_bl.kual"  :class="{'is-invalid':errors.kual}" class="form-control ml-1" >
 -->                                        <div  v-if="errors.kual"> <div style="color:red">{{errors.kual[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Tanggal Aplikasi  <span style="color:red">*</span></label>
                                        <input name='tgl_aplikasi' id="tgl_aplikasi" type="date"  v-model="kualifikasi_bl.tgl_aplikasi"  :class="{'is-invalid':errors.tgl_aplikasi}" class="form-control ml-1" >
                                        <div  v-if="errors.tgl_aplikasi"> <div style="color:red">{{errors.tgl_aplikasi[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Tanggal Pemutus <span style="color:red">*</span></label>
                                        <input name='tgl_pemutus' id="tgl_pemutus" type="date" class="form-control ml-1"  v-model="kualifikasi_bl.tgl_pemutus" :class="{'is-invalid':errors.tgl_pemutus}">
                                        <div  v-if="errors.tgl_pemutus"> <div style="color:red">{{errors.tgl_pemutus[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Tanggal Terbit  </label>
                                        <input name='tanggal_terbit' id="tanggal_terbit" v-model="kualifikasi_bl.tanggal_terbit"   type="date"  :class="{'is-invalid':errors.tanggal_terbit}" class="form-control ml-1">
                                        <div  v-if="errors.tanggal_terbit"> <div style="color:red">{{errors.tanggal_terbit[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Tanggal Berlaku  </label>
                                        <input name='tgl_berlaku' id="tgl_berlaku" type="date" v-model="kualifikasi_bl.tgl_berlaku"   :class="{'is-invalid':errors.tgl_berlaku}" class="form-control ml-1">
                                        <div  v-if="errors.tgl_berlaku"> <div style="color:red">{{errors.tgl_berlaku[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> NO Seri SBU </label>
                                        <input name='no_seri_sbu' id="no_seri_sbu" v-model="kualifikasi_bl.no_seri_sbu"   type="text"  :class="{'is-invalid':errors.no_seri_sbu}" class="form-control ml-1">
                                        <div  v-if="errors.no_seri_sbu"> <div style="color:red">{{errors.no_seri_sbu[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Tanggal Rek Kadin  </label>
                                        <input name='tgl_rek_kading' id="tgl_rek_kading" type="date" v-model="kualifikasi_bl.tgl_rek_kading"   :class="{'is-invalid':errors.tgl_rek_kading}" class="form-control ml-1">
                                        <div  v-if="errors.tgl_rek_kading"> <div style="color:red">{{errors.tgl_rek_kading[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Tanggal Pengirim </label>
                                        <input name='tgl_pengirim' id="tgl_pengirim" v-model="kualifikasi_bl.tgl_pengirim"   type="date"  :class="{'is-invalid':errors.tgl_pengirim}" class="form-control ml-1">
                                        <div  v-if="errors.tgl_pengirim"> <div style="color:red">{{errors.tgl_pengirim[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> No Leges  </label>
                                        <input name='no_leges' id="no_leges" type="text" v-model="kualifikasi_bl.no_leges"   :class="{'is-invalid':errors.no_leges}" class="form-control ml-1">
                                        <div  v-if="errors.no_leges"> <div style="color:red">{{errors.no_leges[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Tanggal Leges </label>
                                        <input name='tgl_leges' id="tgl_leges" v-model="kualifikasi_bl.tgl_leges"   type="date"  :class="{'is-invalid':errors.tgl_leges}" class="form-control ml-1">
                                        <div  v-if="errors.tgl_leges"> <div style="color:red">{{errors.tgl_leges[0]}} </div>    </div>
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

    name:"kualifikasi_bl",
    data(){
        return {
            errors:[],
            InActive:false,
            data_show:[],
            data_post:{},
            kualifikasi_bl:{
                no_kta : this.$route.query.no_kta,
                no_berkas : this.$route.query.no_berkas,
                kode_bl:'',
                kual:'',
                tgl_aplikasi:'',
                tgl_pemutus:'',
                tgl_terbit:'',
                tgl_berlaku:'',
                no_seri_sbu:'',
                tgl_pengirim:'',
                no_leges:'',
                tgl_leges:'',
            }        
        }
    }, 

    created(){
        var app = this;
        app.get_klasifikasi_bl();
        app.get_kualifikasi_bu();
    },
    computed:{
        ...mapState('application',{
            klasifikasi_bl:state=>state.klasifikasi_bl,
            kualifikasi_bu:state=>state.kualifikasi_bu,
            provinsi:state=>state.provinsi
        })
    },
    methods:{
        ...mapActions('application',['get_klasifikasi_bl','get_provinsi','get_kualifikasi_bu']),

        clear_form(){
            this.kualifikasi_bl.kode_bl='';
            this.kualifikasi_bl.kual='';
            this.kualifikasi_bl.tgl_aplikasi='';
            this.kualifikasi_bl.tgl_pemutus='';
            this.kualifikasi_bl.tgl_terbit='';
            this.kualifikasi_bl.tgl_berlaku='';
            this.kualifikasi_bl.no_seri_sbu='';
            this.kualifikasi_bl.tgl_pengirim='';
            this.kualifikasi_bl.no_leges='';
            this.kualifikasi_bl.tgl_leges='';
        },


        store_data(e){
            e.preventDefault();
            var app = this;
            app.InActive = true;
            $axios.post(`kualifikasi_bl`,app.kualifikasi_bl).then(function(resp){
                swal('Success','Simpan data berhasil','success');
                app.clear_form();
                app.$router.push('/data-administrasi/detail/'+app.kualifikasi_bl.no_berkas+'/'+app.kualifikasi_bl.no_kta);
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
