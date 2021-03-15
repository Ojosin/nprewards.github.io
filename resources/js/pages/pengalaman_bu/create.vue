<template>    
    <div>
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon" style="background:#0069b8;color:#fff">
                        <i class="fa fa-user">
                        </i>
                    </div>
                    <div>Buat Baru Pengalaman Badan Usaha
                        <div class="page-title-subheading">Form dibawah ini adalah Pengalaman Badan Usaha untuk pengajuan sertifikasi di  system SBU INKINDO.
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
                            <h4 > PENGALAMAN BADAN USAHA </h4>
                            <hr>    
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            Kode SB   <span style="color:red">*</span>
                                        </label>
                                        <select class="form-control" id="kode_sb" name="kode_sb" :class="{'is-invalid':errors.kode_sb}"  v-model="pengalaman_bu.kode_sb">
                                            <option value=""> - Pilih SB - </option>
                                            <option  v-for="(item, index) in klasifikasi_sb" :key="index" :value="item.id_klasifikasi_sb"> {{item.keterangan}} </option>
                                        </select>
                                        <div  v-if="errors.kode_sb"> <div style="color:red">{{errors.kode_sb[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">   Nama Paket Pekerjaan <span style="color:red">*</span></label>
                                        <input name='nama_paket' id="nama_paket" type="text"  v-model="pengalaman_bu.nama_paket"  :class="{'is-invalid':errors.nama_paket}" class="form-control ml-1" >
                                        <div  v-if="errors.nama_paket"> <div style="color:red">{{errors.nama_paket[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Pemberi Tugas  <span style="color:red">*</span></label>
                                        <input name='pemberi_tugas' id="pemberi_tugas" type="text"  v-model="pengalaman_bu.pemberi_tugas"  :class="{'is-invalid':errors.pemberi_tugas}" class="form-control ml-1" >
                                        <div  v-if="errors.pemberi_tugas"> <div style="color:red">{{errors.pemberi_tugas[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Deskripsi <span style="color:red">*</span></label>
                                        <input name='deskripsi' id="deskripsi" type="text" class="form-control ml-1"  v-model="pengalaman_bu.deskripsi" :class="{'is-invalid':errors.tahap}">
                                        <div  v-if="errors.deskripsi"> <div style="color:red">{{errors.deskripsi[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Tahun </label>
                                        <input name='tahun' id="nomor_kontrak" v-model="pengalaman_bu.tahun"  readonly="readonly" ref="tahun"  type="text"  :class="{'is-invalid':errors.tahun}" class="form-control ml-1">
                                        <div  v-if="errors.tahun"> <div style="color:red">{{errors.tahun[0]}} </div>    </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Nomor Kontrak </label>
                                        <input name='nomor_kontrak' id="nomor_kontrak" v-model="pengalaman_bu.nomor_kontrak"   type="text"  :class="{'is-invalid':errors.nomor_kontrak}" class="form-control ml-1">
                                        <div  v-if="errors.nomor_kontrak"> <div style="color:red">{{errors.nomor_kontrak[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Utama / Associate / Proyek JK / NJK  </label>
                                        <input name='utama' id="utama" type="text" v-model="pengalaman_bu.utama"   :class="{'is-invalid':errors.utama}" class="form-control ml-1">
                                        <div  v-if="errors.utama"> <div style="color:red">{{errors.utama[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Tanggal Kontrak </label>
                                        <input name='tgl_kontrak' id="tgl_kontrak" v-model="pengalaman_bu.tgl_kontrak"   type="date"  :class="{'is-invalid':errors.tgl_kontrak}" class="form-control ml-1">
                                        <div  v-if="errors.tgl_kontrak"> <div style="color:red">{{errors.tgl_kontrak[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Tanggal Mulai  </label>
                                        <input name='tgl_mulai' id="tgl_mulai" type="date" v-model="pengalaman_bu.tgl_mulai"   :class="{'is-invalid':errors.tgl_mulai}" class="form-control ml-1">
                                        <div  v-if="errors.tgl_mulai"> <div style="color:red">{{errors.tgl_mulai[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Tanggal Selesai </label>
                                        <input name='tgl_selesai' id="tgl_selesai" v-model="pengalaman_bu.tgl_selesai"   type="date"  :class="{'is-invalid':errors.tgl_selesai}" class="form-control ml-1">
                                        <div  v-if="errors.tgl_selesai"> <div style="color:red">{{errors.tgl_selesai[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Nilai Kontrak  </label>
                                        <input name='nilai_kontrak' id="nilai_kontrak" type="text" @change="get_bobot()" v-model="pengalaman_bu.nilai_kontrak"   :class="{'is-invalid':errors.nilai_kontrak}" class="form-control ml-1">
                                        <div  v-if="errors.nilai_kontrak"> <div style="color:red">{{errors.nilai_kontrak[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> % Bobot Per SB </label>
                                        <input name='bobot' id="bobot" v-model="pengalaman_bu.bobot" @change="get_bobot()"  type="text"  :class="{'is-invalid':errors.bobot}" class="form-control ml-1">
                                        <div  v-if="errors.bobot"> <div style="color:red">{{errors.bobot[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Nilai Kontrak Setelah Dibobotkan  </label>
                                        <input name='nilai_kontrak_dibobotkan' id="nilai_kontrak_dibobotkan" type="text" readonly="readonly" v-model="pengalaman_bu.nilai_kontrak_dibobotkan"   :class="{'is-invalid':errors.nilai_kontrak_dibobotkan}" class="form-control ml-1">
                                        <div  v-if="errors.nilai_kontrak_dibobotkan"> <div style="color:red">{{errors.nilai_kontrak_dibobotkan[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">
                                            No Berita Acara  <span style="color:red">*</span>
                                        </label>
                                        <input name='no_berita_acara' id="no_berita_acara" type="text"  ref="no_berita_acara"  v-model="pengalaman_bu.no_berita_acara" :class="{'is-invalid':errors.no_berita_acara}" class="form-control ml-1">
                                        <div  v-if="errors.no_berita_acara"> <div style="color:red">{{errors.no_berita_acara[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang">  Tanggal Berita Acara <span style="color:red">*</span></label>
                                        <input name='tgl_berita_acara' id="tgl_berita_acara" type="date"  v-model="pengalaman_bu.tgl_berita_acara"  :class="{'is-invalid':errors.tgl_berita_acara}" class="form-control ml-1" >
                                        <div  v-if="errors.tgl_berita_acara"> <div style="color:red">{{errors.tgl_berita_acara[0]}} </div>    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="ml-1 bintang"> Lokasi Proyek </label>

                                        <select class="form-control" id="lokasi_proyek" name="lokasi_proyek"   v-model="pengalaman_bu.lokasi_proyek">
                                            <option value=""> - Pilih Lokasi - </option>
                                            <option  v-for="(item, index) in provinsi " :key="index" :value="item.kode_provinsi"> {{item.nama_provinsi}} </option>
                                        </select>

<!--                                         <input name='lokasi_proyek' id="lokasi_proyek" v-model="pengalaman_bu.lokasi_proyek"   type="text"  :class="{'is-invalid':errors.lokasi_proyek}" class="form-control ml-1">
 -->                                        <div  v-if="errors.lokasi_proyek"> <div style="color:red">{{errors.lokasi_proyek[0]}} </div>    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="examplePassword11" class="ml-1 bintang"> Jumlah Man / Month </label>
                                        <input name='jumlah_month' id="jumlah_month" type="text" v-model="pengalaman_bu.jumlah_month"   :class="{'is-invalid':errors.jumlah_month}" class="form-control ml-1">
                                        <div  v-if="errors.jumlah_month"> <div style="color:red">{{errors.jumlah_month[0]}} </div>    </div>
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

    name:"pengalaman_bu",
    data(){
        return {
            errors:[],
            InActive:false,
            data_show:[],
            data_post:{},
            pengalaman_bu:{
                no_kta : this.$route.query.no_kta,
                no_berkas : this.$route.query.no_berkas,
                kode_sb:'',
                nama_paket:'',
                pemberi_tugas:'',
                deskripsi:'',
                tgl_kontrak:'',
                tgl_mulai:'',
                tgl_selesai:'',
                nomor_kontrak:'',
                utama:'',
                nilai_kontrak:'',
                bobot:'',
                nilai_kontrak_dibobotkan:'',
                no_berita_acara:'',
                tgl_berita_acara:'',
                lokasi_proyek:'',
                jumlah_month:'',
                tahun: new Date().getFullYear(),
            }        
        }
    }, 

    created(){
        var app = this;
        app.get_klasifikasi_sb();
        app.get_provinsi();
    },
    computed:{
        ...mapState('application',{
            klasifikasi_sb:state=>state.klasifikasi_sb,
            provinsi:state=>state.provinsi
        })
    },
    methods:{
        ...mapActions('application',['get_klasifikasi_sb','get_provinsi']),

        clear_form(){
            this.pengalaman_bu.kode_sb='';
            this.pengalaman_bu.nama_paket='';
            this.pengalaman_bu.pemberi_tugas='';
            this.pengalaman_bu.deskripsi='';
            this.pengalaman_bu.tgl_kontrak='';
            this.pengalaman_bu.tgl_mulai='';
            this.pengalaman_bu.tgl_selesai='';
            this.pengalaman_bu.nomor_kontrak='';
            this.pengalaman_bu.utama='';
            this.pengalaman_bu.nilai_kontrak='';
            this.pengalaman_bu.bobot='';
            this.pengalaman_bu.nilai_kontrak_dibobotkan='';
            this.pengalaman_bu.no_berita_acara='';
            this.pengalaman_bu.tgl_berita_acara='';
            this.pengalaman_bu.lokasi_proyek='';
            this.pengalaman_bu.jumlah_month='';
            this.pengalaman_bu.tahun='';
        },


        store_data(e){
            e.preventDefault();
            var app = this;
            app.InActive = true;
            $axios.post(`pengalaman_bu`,app.pengalaman_bu).then(function(resp){
                swal('Success','Simpan data berhasil','success');
                app.clear_form();
                app.$router.push('/data-administrasi/detail/'+app.pengalaman_bu.no_berkas+'/'+app.pengalaman_bu.no_kta);
                app.InActive = false;
            }).catch(function(resp){
                app.InActive = false;
                if(resp.response.data.errors)
                {
                    app.$refs.tahun.focus()
                    app.errors = resp.response.data.errors;                    
                }
                else
                {
                    swal('Error',resp.response.data.message,'error');
                }

            })
        },

        get_bobot(){
            
            var app = this;
            var v_ = app.pengalaman_bu.bobot;

            app.pengalaman_bu.nilai_kontrak_dibobotkan = (parseInt(v_) * parseInt(app.pengalaman_bu.nilai_kontrak)) / 100;
        }


    }

}
</script>
