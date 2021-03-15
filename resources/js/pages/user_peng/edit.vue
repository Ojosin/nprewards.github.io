<template>    
    <div>
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon" style="background:#0069b8;color:#fff">
                        <i class="fa fa-user">
                        </i>
                    </div>
                    <div>Edit User Pengurus
                        <div class="page-title-subheading">Form dibawah ini adalah untuk edit user pengurus akses pengguna system SBU INKINDO.
                        </div>
                    </div>
                </div>

                <div class="page-title-actions">
                    <button type="button" @click="update_data"  title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-success">
                        <i class="fa fa-business-time fa-w-20"></i> Edit
                    </button>
                    <div class="d-inline-block dropdown">
                        <router-link class="btn btn-danger" to="/user-peng" ><i class="fa fa-chevron-left"></i>
                            Batal
                        </router-link>
                    </div>
                </div>  

            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade active show" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">FORM TAMBAH GRUP</h5>
                        <hr>
                        <form @submit="update_data">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Nama Lengkap <span style="color:red">*</span>
                                            <input type="hidden" name="id" v-model="user.id">
                                        </label><input name='name' id="name" type="text"  ref="name"  v-model="user.name" :class="{'is-invalid':errors.name}" class="form-control ml-1">
                                        <div  v-if="errors.name"> <div style="color:red">{{errors.name[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">Username<span style="color:red">*</span></label>
                                        <input name='username' id="username" type="text"  v-model="user.username"  :class="{'is-invalid':errors.username}" class="form-control ml-1" >
                                        <div  v-if="errors.username"> <div style="color:red">{{errors.username[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang">Email<span style="color:red">*</span></label>
                                        <input name='email' id="email" type="email" class="form-control ml-1"  v-model="user.email" :class="{'is-invalid':errors.email}">
                                        <div  v-if="errors.email"> <div style="color:red">{{errors.email[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="exampleEmail11" class="ml-1 bintang">Nama Perusahaan<span style="color:red">*</span></label>
                                        <input name='nama_perusahaan' id="nama_perusahaan" v-model="user.nama_perusahaan"   type="text"  :class="{'is-invalid':errors.nama_perusahaan}" class="form-control ml-1">
                                        <div  v-if="errors.nama_perusahaan"> <div style="color:red">{{errors.nama_perusahaan[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="examplePassword11" class="ml-1 bintang">Nomor Telepon<span style="color:red">*</span></label>
                                        <input name='no_telpon' id="no_telpon" type="text" v-model="user.no_telpon"   :class="{'is-invalid':errors.no_telpon}" class="form-control ml-1">
                                        <div  v-if="errors.no_telpon"> <div style="color:red">{{errors.no_telpon[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="position-relative form-group"><label for="exampleEmail11" class="ml-1">Alamat Lengkap Perusahaan</label>
                                        <textarea name='alamat_perusahaan' v-model="user.alamat_perusahaan" id="alamat_perusahaan" type="text"  :class="{'is-invalid':errors.alamat_perusahaan}" class="form-control ml-1" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="position-relative mt-4 mb-4">
                                <label for="exampleAddress" class="ml-1 bintang mb-0"></label>

                                <div class="col-12 ml-4">
                                    <input name="user[]" value="" id="grup" type="checkbox" class="form-check-input" checked>
                                    <label for="exampleCheck" class="form-check-label">
                                    </label>
                                </div>

                            </div>
                        </form>
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
            user:{
                id:'',
                name:'',
                username :'',
                email:'',
                no_telpon:'',
                nama_perusahaan:'',
                type_user:'user_peng',
            }        
        }
    }, 

    created(){
        var app = this;
        app.edit_user();
    },
    methods:{


        clear_form(){
            this.user.name  = '';
            this.user.username  = '';
            this.user.email  = '';
            this.user.no_telpon  = '';
            this.user.nama_perusahaan  = '';
            this.user.alamat_perusahaan  = '';
        },


        update_data(e){

            e.preventDefault();
            var app = this;
            app.InActive = true;
            $axios.put('/user/'+app.user.id,app.user).then(function(resp){
                swal('Success','Ubah data berhasil','success');
                app.clear_form();
                app.$router.push('/user-peng');
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
        edit_user(){
            var app = this;
            var id =  app.$route.params.id;

            $axios.get('user/'+id+'/edit')
            .then(function(resp){
                console.log(resp.data);
                app.user.name = resp.data.name;
                app.user.id = resp.data.id;
                app.user.username = resp.data.username;
                app.user.email = resp.data.email;
                app.user.no_telpon = resp.data.no_telpon;
                app.user.nama_perusahaan = resp.data.nama_perusahaan;
                app.user.alamat_perusahaan = resp.data.alamat_perusahaan;
            })
            .catch(function(resp){

            })
        },


    }

}
</script>
