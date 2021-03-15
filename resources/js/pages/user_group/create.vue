<template>    
<div>
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon" style="background:#0069b8;color:#fff">
                    <i class="fa fa-user">
                    </i>
                </div>
                <div>Buat Baru Level Grup Pengguna
                    <div class="page-title-subheading">Form dibawah ini adalah untuk menambahkan data level akses pengguna system SBU INKINDO.
                    </div>
                </div>
            </div>

             <div class="page-title-actions">
                <button type="button" @click="store_data"  title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-success">
                    <i class="fa fa-business-time fa-w-20"></i> Simpan
                </button>
                <div class="d-inline-block dropdown">
                    <router-link class="btn btn-danger" to="/user-group" ><i class="fa fa-chevron-left"></i>
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
                        <form>
                            
                            <div class="position-relative form-group">
                                <label for="inputTypeGroup">Nama Group <span style="color:red">*</span> </label>
                                <input type="text" class="form-control" v-model="group.name" id="inputTypeGroup" :class="{'is-invalid':errors.name}"
                                 placeholder="">
                                <div  v-if="errors.name"> <div style="color:red">{{errors.name[0]}} </div>    </div>
                            </div>
                            <div class="position-relative form-group">
                               <label for="inputTypeGroup">Description </label>
                                <textarea  class="form-control" v-model="group.description" id="inputTypeGroup" 
                                :class="{'is-invalid':errors.description}"  placeholder=""></textarea>
                                <div  v-if="errors.description"> <div style="color:red">{{errors.description[0]}} </div>    </div>
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
            group:{
                name:'',
                description :'',
                id_group:'',
            }        
        }
    }, 
     
    created(){
        var app = this;
    },
    methods:{
        
        clear_form(){
            this.group.name  = '';
            this.group.description  = '';
            this.group.id_group  = '';
        },

        store_data(e){
        
            e.preventDefault();
            var app = this;
            app.InActive = true;
            $axios.post(`/group`,app.group).then(function(resp){
                swal('Success','Simpan data berhasil','success');
                app.clear_form();
                app.$router.push('/user-group');
                app.InActive = false;
            }).catch(function(resp){
                app.errors = resp.response.data.errors;
                app.InActive = false;
            })
        },
        

    }

}
</script>
