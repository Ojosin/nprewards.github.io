<template>    
    <div>
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon" style="background:#0069b8;color:#fff">
                        <i class="fa fa-user">
                        </i>
                    </div>
                    <div>Buat Baru Omzet
                        <div class="page-title-subheading">Form dibawah ini adalah Omzet untuk pengajuan sertifikasi di  system SBU INKINDO.
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">

                    <button type="button" @click="store_data"  title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-success">
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
                                    <label for="exampleEmail11" class="ml-1"> <h5> SPT :  </h5> </label>
                                </div>
                            </div>
                            <hr>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Tahun   <span style="color:red">*</span>
                                        </label>
                                        <input name='tahun' id="tahun" type="text"  ref="tahun"  v-model="omset.tahun" :class="{'is-invalid':errors.tahun}" class="form-control ml-1">
                                        <div  v-if="errors.tahun"> <div style="color:red">{{errors.tahun[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Nilai SPT  <span style="color:red">*</span></label>
                                        <input name='nilai_spt' id="nilai_spt" type="text"  v-model="omset.nilai_spt"  :class="{'is-invalid':errors.nilai_spt}" class="form-control ml-1" >
                                        <div  v-if="errors.nilai_spt"> <div style="color:red">{{errors.nilai_spt[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="exampleEmail11" class="ml-1"> <h5> OMZET (5 th Terakhir) :  </h5> </label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Tahun   <span style="color:red">*</span>
                                        </label>
                                        <input name='tahun' id="tahun" type="text"  ref="tahun"  v-model="omset.tahun" :class="{'is-invalid':errors.tahun}" class="form-control ml-1">
                                        <div  v-if="errors.tahun"> <div style="color:red">{{errors.tahun[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Nilai SPT  <span style="color:red">*</span></label>
                                        <input name='nilai_spt' id="nilai_spt" type="text"  v-model="omset.nilai_spt"  :class="{'is-invalid':errors.nilai_spt}" class="form-control ml-1" >
                                        <div  v-if="errors.nilai_spt"> <div style="color:red">{{errors.nilai_spt[0]}} </div>    </div>
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
            omset:{
                no_kta : this.$route.query.no_kta,
                no_berkas : this.$route.query.no_berkas,
                tahun:'',
                nilai_spt :'',
            }        
        }
    }, 

    created(){
        var app = this;
    },
    methods:{

        clear_form(){
            this.omset.tahun  = '';
            this.omset.nilai_spt  = '';
        },


        store_data(e){
            e.preventDefault();
            var app = this;
            app.InActive = true;
            $axios.post(`omset`,app.omset).then(function(resp){
                swal('Success','Simpan data berhasil','success');
                app.clear_form();
                app.$router.push('/data-administrasi/detail/'+app.omset.no_berkas+'/'+app.omset.no_kta);
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
