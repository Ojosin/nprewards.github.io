<template>    
    <div>
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon" style="background:#0069b8;color:#fff">
                        <i class="fa fa-user">
                        </i>
                    </div>
                    <div>Data Level Grup Pengguna
                        <div class="page-title-subheading">Dibawah ini adalah data level akses pengguna system SBU INKINDO.
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <div class="d-inline-block dropdown">
                    <router-link class="btn-shadow btn btn-success" :to="{name:'user-group.create'}"><i class="fa fa-plus fa-w-20"></i>
                         Group Baru
                    </router-link>
                </div>
                <button type="button"  title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-danger">
                    <i class="fa fa-trash"></i> Hapus Semua
                </button>
            </div>    
        </div>
    </div>
    <div class="row">
        <loading :active.sync="isLoading" 
        :can-cancel="true" 
        ></loading>
        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <div class="col-sm-3 mt-2 mb-3 pull-right" bis_skin_checked="1"><input type="text" name="q" placeholder="Cari...." class="form-control"></div>
                    <table class="mb-0 table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Grup</th>
                                <th>Deskripsi Grup</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="row,index in data_show">
                                <td>
                                    <input type="checkbox" class="icheckbox ids" name="id[]" value="">
                                </td>
                                <td>{{row.name}}</td>
                                <td>{{row.description}}</td>
                                <td>
                                    <router-link class="label-custome label-warning" :to="{name:'user-group.edit',params:{id:row.id_group}}" ><i class="fa fa-edit"></i>
                                    </router-link>
                                    <a @click="delete_group(row.id_group)" class="label-custome label-warning" href="javascript:void(0)">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
            isLoading: false,
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
        app.get_data();
    },
    methods:{

        get_data(page){
           var app =this;
           app.isLoading = true;
           if(typeof page == 'undefined'){
            page = 1;
        }
        $axios.get(`/group`).then(function(resp){
            app.data_show = resp.data.data;
                //app.data_post = resp.data;
                app.isLoading = false;
            }).catch(function(resp){
                app.isLoading = false;  
            })
        },
        


        delete_group(id){
            var app = this;
            swal({
                title:"Apakah kamu yakin",
                text:"Menghapus data ini",
                icon:'warning',
                buttons:true,
                dangerMode : true,
            }).then((willdelete)=>{
                if(willdelete){
                    var app = this;
                    $axios.delete('group/'+id)
                    .then(function(resp){
                        app.get_data();    
                    })
                    .catch(function(resp){

                    })
                }
            })
        }

    }

}
</script>
