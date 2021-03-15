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
                         <div class="col-sm-4 mt-2 mb-3 pull-left" bis_skin_checked="1">
                            <button class="btn-shadow btn btn-warning" style="color:#fff" @click="print_neraca(param_uri,param_uri2)"><i class="fa fa-print fa-w-20"></i>
                                Print Neraca
                            </button>
                        </div>
                        <div class="col-sm-3 mt-2 mb-3 pull-left" bis_skin_checked="1">
                            <a :href="'/neraca/create?no_berkas='+param_uri+'&no_kta='+param_uri2" class="btn-shadow btn btn-success"> <i class="fa fa-plus fa-w-20"></i> Data Neraca</a>
                            <!-- <router-link class="btn-shadow btn btn-success" :to="{name:'neraca.create',query:{no_berkas: param_uri,no_kta:param_uri2 } }"><i class="fa fa-plus fa-w-20"></i> -->
                                 
                            <!-- </router-link> -->
                        </div>
                        <table class="mb-0 table">
                            <thead>
                                <tr>
                                    <th>Tahun</th>
                                    <th>Jumlah Aktiva Lancar</th>
                                    <th>Jumlah Kewajiban Lancar</th>
                                    <th>Total Aktiva Lancar</th>
                                    <th>Total Kewajiban Lancar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                        <tbody>
                            <tr v-for="row,index in data_show">
                                <td>{{row.tahun_aktv_sblm}} - {{row.tahun_aktv_sudah}}</td>
                                <td>{{row.jml_aktiva_lancar}}</td>
                                <td>{{row.jml_kewajiban_lancar}}</td>
                                <td>{{row.total_aktiva_lancar}}</td>
                                <td>{{row.total_kewajiban_lancar}}</td>
                                <td>
                                    <router-link class="label-custome label-warning" :to="{name:'neraca.edit',params:{id:row.id_neraca},query:{no_kta:param_uri2,no_berkas:param_uri}}" ><i class="fa fa-edit"></i>
                                    </router-link>
                                    <a @click="delete_neraca(row.id_neraca)" class="label-custome label-warning" href="javascript:void(0)">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                     <button class="label-customer label-warning" style="color:#0056b3" @click="print_neraca(row.id_neraca,param_uri,param_uri2)" ><i class="fa fa-print"></i>
                                    </button>
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
        $axios.get('/neraca?no_berkas='+app.param_uri+'&no_kta='+app.param_uri2).then(function(resp){
            app.data_show = resp.data.data;
                app.isLoading = false;
            }).catch(function(resp){
                app.isLoading = false;  
            })
        },
        


        delete_neraca(id){
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
                    $axios.delete('neraca/'+id)
                    .then(function(resp){
                        app.get_data();    
                    })
                    .catch(function(resp){

                    })
                }
            })
        },
        print_neraca(id,no_berkas,no_kta) {
            var app = this;
            app.isLoading = true;
            $axios('/print_neraca?no_berkas='+no_berkas+'&no_kta='+no_kta+'&id_neraca='+id, {
                method: 'GET',
                responseType: 'blob'
            })
            .then(response => {
                var fileURL = window.URL.createObjectURL(new Blob([response.data]));
                var fileLink = document.createElement('a');
                fileLink.href = fileURL;
                fileLink.setAttribute('download', 'neraca.pdf');
                document.body.appendChild(fileLink);
                fileLink.click();
                app.isLoading = false;

            })
            .catch(error => {
            });
        }

    }

}
</script>
