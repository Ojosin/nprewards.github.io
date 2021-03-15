<template>    
    <div>
        <div class="row">
            <loading :active.sync="isLoading" 
            :can-cancel="true" 
            ></loading>
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="col-sm-3 mt-2 mb-3 pull-right" bis_skin_checked="1"><input type="text" name="q" placeholder="Cari...." class="form-control"></div>
                        <div class="col-sm-3 mt-2 mb-3 pull-left" bis_skin_checked="1">
                            <router-link class="btn-shadow btn btn-success" :to="{name:'akte-notaris.create',query:{no_berkas: param_uri,no_kta:param_uri2 } }"><i class="fa fa-business-time fa-w-20"></i>
                                Tambah Data Akte Notaris
                            </router-link>
                        </div>
                        <table class="mb-0 table">
                            <thead>
                                <tr>
                                    <th>Tanggal Akte Pendirian</th>
                                    <th>Nomor Akte Pendirian</th>
                                    <th>Nama Notaris</th>
                                    <th>Tanggal Akte Perubahan</th>
                                    <th>Nomor Akte Perubahan</th>
                                    <th>Nama Notaris</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="row,index in data_show">
                                    <td>{{row.tgl_pendirian}}</td>
                                    <td>{{row.no_pendirian}}</td>
                                    <td>{{row.notaris_pendirian}}</td>
                                    <td>{{row.tgl_perubahan}}</td>
                                    <td>{{row.notaris_perubahan}}</td>
                                    <td>{{row.no_perubahan}}</td>

                                    <td>
                                        <router-link class="label-custome label-warning" :to="{name:'akte-notaris.edit',params:{id:row.id_akte_notaris},query:{no_kta:param_uri2,no_berkas:param_uri}}" ><i class="fa fa-edit"></i>
                                        </router-link>
                                        <a @click="delete_user(row.id_akte_notaris)" class="label-custome label-warning" href="javascript:void(0)">
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
            param_uri: this.$route.params.no_berkas,
            param_uri2: this.$route.params.no_kta,
            isLoading: false,
            errors:[],
            data_show:[],
            data_post:{},
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
        $axios.get('/akte_notaris?no_berkas='+app.param_uri+'&no_kta='+app.param_uri2).then(function(resp){
            app.data_show = resp.data.data;
                app.isLoading = false;
            }).catch(function(resp){
                app.isLoading = false;  
            })
        },
        


        delete_user(id){
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
                    $axios.delete('akte_notaris/'+id)
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
