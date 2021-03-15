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
                        <router-link class="btn-shadow btn btn-danger" :to="{name:'data-administrasi.data'}"><i class="fa fa-chevron-left fa-w-20"></i>
                            Kembali
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
                <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                    <li class="nav-item">
                        <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                            <span>Akte Notaris</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                            <span>Pengurus</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                            <span>Personil</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" class="nav-link" id="tab-3" data-toggle="tab" href="#tab-content-3">
                            <span>Pegalaman Badan Usaha</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" class="nav-link" id="tab-4" data-toggle="tab" href="#tab-content-4">
                            <span>Kualifikasi Bidang / Layanan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" class="nav-link" id="tab-5" data-toggle="tab" href="#tab-content-5">
                            <span>Neraca</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" class="nav-link" id="tab-6" data-toggle="tab" href="#tab-content-6">
                            <span>Pemilik Saham</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" class="nav-link" id="tab-7" data-toggle="tab" href="#tab-content-7">
                            <span>Omzet</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" class="nav-link" id="tab-8" data-toggle="tab" href="#tab-content-8">
                            <span> Rekening Bank</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" class="nav-link" id="tab-9" data-toggle="tab" href="#tab-content-9">
                            <span> Peralatan </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" class="nav-link" id="tab-10" data-toggle="tab" href="#tab-content-10">
                            <span> Cabang </span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <akte_notaris></akte_notaris>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <pengurus></pengurus>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <personil></personil>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane tabs-animation fade" id="tab-content-3" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <pengalaman_bu></pengalaman_bu>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane tabs-animation fade" id="tab-content-4" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <kualifikasi_bl></kualifikasi_bl>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane tabs-animation fade" id="tab-content-5" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <neraca></neraca>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane tabs-animation fade" id="tab-content-6" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <pemilik_saham></pemilik_saham>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane tabs-animation fade" id="tab-content-7" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <omset></omset>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane tabs-animation fade" id="tab-content-8" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <rekening_bank></rekening_bank>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane tabs-animation fade" id="tab-content-9" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <peralatan></peralatan>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane tabs-animation fade" id="tab-content-10" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <kantor_cabang></kantor_cabang>
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
import akte_notaris from '../akte_notaris/akte_notaris';
import rekening_bank from '../rekening_bank/rekening_bank';
import kantor_cabang from '../kantor_cabang/kantor_cabang';
import pemilik_saham from '../pemilik_saham/pemilik_saham';
import kualifikasi_bl from '../kualifikasi_bl/kualifikasi_bl';
import neraca from '../neraca/neraca';
import omset from '../omset/omset';
import personil from '../personil/personil';
import peralatan from '../peralatan/peralatan';
import pengurus from '../pengurus/pengurus';
import pengalaman_bu from '../pengalaman_bu/pengalaman_bu';
// import personil from '../personil/create';
// import personil from '../personil/create';
// import personil from '../personil/create';
// import personil from '../personil/create';
// import personil from '../personil/create';
// import personil from '../personil/create';
// import akte_notaris from '../pengurus/create';

export default {

    name:"detail_adminisitrator",
    components: { 
            personil,
            akte_notaris,
            rekening_bank,
            kantor_cabang,
            pemilik_saham,
            kualifikasi_bl,
            neraca,
            omset,
            personil ,
            peralatan,
            pengurus,
            pengalaman_bu,

        },
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
                //app.data_post = resp.data;
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
                    $axios.delete('user/'+id)
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
