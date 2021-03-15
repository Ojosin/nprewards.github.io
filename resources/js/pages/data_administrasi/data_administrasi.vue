<template>    
    <div>
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon" style="background:#0069b8;color:#fff">
                        <i class="fa fa-user">
                        </i>
                    </div>
                    <div>Data Adminitrasi
                        <div class="page-title-subheading">Dibawah ini adalah data administrasi system SBU INKINDO.
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <div class="d-inline-block dropdown">
                    <router-link class="btn-shadow btn btn-success" :to="{name:'data-administrasi.create'}"><i class="fa fa-business-time fa-w-20"></i>
                        Tambah Data Administrasi
                    </router-link>
                </div>
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
                                <th>Tanggal Aplikasi</th>
                                <th> No Berkas </th>
                                <th> No Registrasi </th>
                                <th>Tahapan </th>
                                <th>No Anggota Inkindo</th>
                                <th>Nama Badan Usaha</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="row,index in data_show">
                                <td>{{row.tgl_aplikasi}}</td>
                                <td>
                                    <router-link :to="{name:'data-administrasi.detail',params:{no_berkas:row.no_berkas,no_kta:row.no_kta}}">
                                        {{row.no_berkas}}
                                    </router-link>
                                </td>
                                <td>{{row.no_registrasi_buk}}</td>
                                <td>{{row.tahapan}}</td>
                                <td>{{row.no_anggota_inkindo}}</td>
                                <td>{{row.nama_badan_usaha}}</td>                                
                                <td>
                                    <router-link class="label-custome label-warning" :to="{name:'data-administrasi.edit',params:{id:row.id_data_administrasi}}" ><i class="fa fa-edit"></i>
                                    </router-link>
                                    <a @click="delete_administrasi(row.id_data_administrasi)" class="label-custome label-warning" href="javascript:void(0)">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <button class="label-customer label-warning" style="color:#0056b3" @click="cetak_sertifikat(row.id_data_administrasi)" ><i class="fa fa-print"></i>
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
            $axios.get(`/data_administrasi`).then(function(resp){
            app.data_show = resp.data.data;
                app.isLoading = false;
            }).catch(function(resp){
                app.isLoading = false;  
            })
        },
        
        delete_administrasi(id){
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
                    $axios.delete('data_administrasi/'+id)
                    .then(function(resp){
                        app.get_data();    
                    })
                    .catch(function(resp){

                    })
                }
            })
        },
        cetak_sertifikat(id) {
                var app = this;
                app.isLoading = true;
                $axios('/cetak_sertifikat?id='+id, {
                    method: 'GET',
                    responseType: 'blob'
                })
                .then(response => {
                    var fileURL = window.URL.createObjectURL(new Blob([response.data]));
                    var fileLink = document.createElement('a');
                    fileLink.href = fileURL;
                    fileLink.setAttribute('download', 'sertifikat.pdf');
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
