<template>    
   <div>
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon" style="background:#0069b8;color:#fff">
                        <i class="fa fa-user">
                        </i>
                    </div>
                    <div>Edit Rekening Bank
                        <div class="page-title-subheading">Form dibawah ini adalah Rekening Bank untuk pengajuan sertifikasi di  system SBU INKINDO.
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">

                    <button type="button" @click="update_data"  title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-success">
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
                                    <label for="exampleEmail11" class="ml-1"> <h5> Rekening Bank  </h5> </label>
                                </div>
                            </div>
                            <hr>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Nama Bank   <span style="color:red">*</span>
                                        </label>
                                        <input name='nama_bank' id="nama_bank" type="text"  ref="nama_bank"  v-model="rekening_bank.nama_bank" :class="{'is-invalid':errors.nama_bank}" class="form-control ml-1">
                                        <div  v-if="errors.nama_bank"> <div style="color:red">{{errors.nama_bank[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> No Rekening  <span style="color:red">*</span></label>
                                        <input name='no_rekening' id="no_rekening" type="text"  v-model="rekening_bank.no_rekening"  :class="{'is-invalid':errors.no_rekening}" class="form-control ml-1" >
                                        <div  v-if="errors.no_rekening"> <div style="color:red">{{errors.no_rekening[0]}} </div>    </div>
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
            rekening_bank:{
                no_kta : this.$route.query.no_kta,
                no_berkas : this.$route.query.no_berkas,
                nama_bank:'',
                id_rekening_bank:'',
                no_rekening :'',
            }      
        }
    }, 

    created(){
        var app = this;
        app.edit_rekening_bank();
    },
    methods:{


        clear_form(){
            this.rekening_bank.nama_bank='';
            this.rekening_bank.no_rekening ='';
            this.rekening_bank.id_rekening_bank ='';
        },


        update_data(e){

            e.preventDefault();
            var app = this;
            app.InActive = true;
            $axios.put('/rekening_bank/'+app.rekening_bank.id_rekening_bank,app.rekening_bank).then(function(resp){
                swal('Success','Ubah data berhasil','success');
                app.clear_form();
                app.$router.push('/data-administrasi/detail/'+app.rekening_bank.no_berkas+'/'+app.rekening_bank.no_kta);
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
        edit_rekening_bank(){
            var app = this;
            var id =  app.$route.params.id;

            $axios.get('rekening_bank/'+id+'/edit')
            .then(function(resp){
                app.rekening_bank.id_rekening_bank = resp.data.id_rekening_bank;
                app.rekening_bank.nama_bank=resp.data.nama_bank;
                app.rekening_bank.no_rekening =resp.data.no_rekening;
            })
            .catch(function(resp){

            })
        },


    }

}
</script>
