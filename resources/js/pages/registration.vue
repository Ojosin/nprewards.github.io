<style>
  .g-recaptcha{
    transform:scale(0.80);
    -webkit-transform:scale(0.80);
    transform-origin:0 0;
    -webkit-transform-origin:0 0;
    margin-top: 10px;
    margin-bottom: -23px;
    width: 100%;
    }

    .is-invalid{
        border:3px solid #f00 !important;
    }

    .rc-anchor{
        border-radius: 25px !important;
    }
</style>
<template>
<div>
    <div class="limiter">
    <div class="container-login100" style="background: url('assets/themes/login/images/bg-peta.jpg'); background-size: cover;">
      <div class="wrap-register100 pt-4 p-b-30">
          <form class="login100-form validate-form"  @submit="regis">
          <div class="login100-form-avatar mt-4">
              <img src="assets/themes/login/logo.png" alt="INKINDO">
          </div>

          <span class="register100-form-title mt-4 mb-2 pb-1">
            Pendaftaran Akun Badan Usaha
          </span>



          <div class="wrap-input100 validate-input m-b-10 mb-3" >
              <input type="text" name="name" id="name" placeholder="Nama Lengkap" v-model="data.name" :class="{'is-invalid':errors.name}"  class="input100">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-user"></i>
              </span>
              <span v-if="errors.name" class="text-password text-danger has-error"></span>
              <div  v-if="errors.name"> <div style="color:red">{{errors.name[0]}} </div>    </div>
          </div>


          <div class="wrap-input100 validate-input m-b-10 mb-3" >
              <input type="text" name="nama_perusahaan" id="nama_perusahaan"  v-model="data.nama_perusahaan" placeholder="Nama Perusahaan" :class="{'is-invalid':errors.nama_perusahaan}" class="input100">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-briefcase"></i>
              </span>

              <div  v-if="errors.nama_perusahaan"> <div style="color:red">{{errors.nama_perusahaan[0]}} </div>    </div>
          </div>


          <div class="wrap-input100 validate-input m-b-10 mb-3" >
              <input type="email" name="email" id="email" @change="cekEmail" placeholder="Email" v-model="data.email" :class="{'is-invalid':errors.email}"  class="input100">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-envelope"></i>
              </span>

              <div  v-if="errors.email"> <div style="color:red">{{errors.email[0]}} </div>    </div>
          </div>
          

          <div class="wrap-input100 validate-input m-b-10 mb-3" >
              <input type="text" name="no_kta" id="no_kta" placeholder="No KTA" class="input100" :class="{'is-invalid':errors.no_kta}"  v-model="data.no_kta">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-id-card"></i>
              </span>

              <div  v-if="errors.no_kta"> <div style="color:red">{{errors.no_kta[0]}} </div>    </div>
          </div>


          <div class="wrap-input100 validate-input m-b-10 mb-3" >
              <input type="text" name="no_telpon" id="no_telpon" placeholder="No Telp" :class="{'is-invalid':errors.no_telpon}"   v-model="data.no_telpon" class="input100">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-phone"></i>
              </span>

              <div  v-if="errors.no_telpon"> <div style="color:red">{{errors.no_telpon[0]}} </div>    </div>
          </div>


          <div class="col-12">
              <div class="row">
              <div class="col-12 col-md-6 col-lg-6 col-xl-6 p-0 pr-md-2">
                <div class="wrap-input100 validate-input m-b-10 mb-3" >
                  <input type="password" name="password" id="password" placeholder="Password" :class="{'is-invalid':errors.password}"  class="input100" v-model="data.password">
                  <span class="focus-input100"></span>
                  <span class="symbol-input100">
                    <i class="fa fa-lock"></i>
                  </span>

                  <div  v-if="errors.password"> <div style="color:red">{{errors.password[0]}} </div>    </div>
                  <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6 col-xl-6 p-0">
                <div class="wrap-input100 validate-input m-b-10 mb-3"  >
                  <input type="password" name="retype_password" id="retype_password" :class="{'is-invalid':errors.naretype_passwordme}"  v-model="data.retype_password" placeholder="Password" class="input100" >
                  <span class="focus-input100"></span>
                  <span class="symbol-input100">
                    <i class="fa fa-lock"></i>
                  </span>

                  <div  v-if="errors.retype_password"> <div style="color:red">{{errors.retype_password[0]}} </div>    </div>
                  <span toggle="#retype_password" class="fa fa-fw fa-eye field-icon toggle-password-retype"></span>
              </div> 
            </div>
              </div>
              </div>
        
<!-- 6Lf5VvAZAAAAAMeSKsBQWKUFaoTSsukUgj-qlxhz -->
          <!-- <span class="captcha">
                <div class="g-recaptcha" data-sitekey="6Lf5VvAZAAAAAGo-57A_yph7BMrTOsm3P4hgTZwk" data-callback="callCaptcha"></div>
                <div class="error text-danger text-captcha"></div>
          </span> -->

          <!-- <vue-recaptcha sitekey="6Lf5VvAZAAAAAGo-57A_yph7BMrTOsm3P4hgTZwk"></vue-recaptcha> -->

          <div class="container-login100-form-btn p-t-10">
              <button type="submit" name="simpan" class="login100-form-btn mt-1" :disabled="dis">
              {{text_regis}}
              </button>
                <span class="forgot mt-4">
                    <span class="label mb-2 mr-2 float-right">
                        Sudah punya akun ? 
                        <router-link to="/login?type_user=user_bu" class="linkdaftar"> Masuk disini </router-link>
                    </span>
                </span>
          </div>

        </form>
      </div>
    </div>
  </div>
  
  
</div>
</template>
<script type="text/javascript">
import {mapActions,mapMutations,mapGetters,mapState} from 'vuex';
import VueRecaptcha from 'vue-recaptcha';
export default {
  components: { VueRecaptcha },
  data(){
    return{
      dis : false,
      errors:[],
      text_regis:'Daftar',
      data : {
        name:'',
        email:'',
        nama_perusahaan:'',
        no_kta :'',
        no_telpon:'',
        password:'',
        retype_password:''
      }
    }
  },
  created(){
    if(this.isAuth){
      document.location.href = "/dashboard";
    }

  },
  computed:{
    ...mapGetters(['isAuth']),
  },
  methods:{
    ...mapActions('auth',['registration']),
    ...mapMutations(['CLEAR_ERRORS']),
    regis(e){
      e.preventDefault();
      var app = this;
      app.dis = true;
      app.text_regis = "Loading ...."
      axios.post('/api/registration',app.data)
        .then((response)=>{
            swal('Success','Daftar berhasil','success');
            app.$router.push('/login');
        })
        .catch(function(resp){
          // alert('tes');
            app.dis = false;
            app.text_regis = "Daftar"
            // console.log(resp.message);
            if(resp.response.data.errors)
            {
                app.errors = resp.response.data.errors;                    
            }
            else
            {
                swal('Error',resp.message,'error');
            }

        })
      },
      cekEmail(){
        var app = this;
          axios.post('/api/cek_email',{email:app.data.email})
          .then((response)=>{
              
          })
          .catch(function(resp){
              if(resp.response.data.errors)
              {
                  app.errors = resp.response.data.errors;                    
              }
              else
              {
                  swal('Error',resp.response.data.message,'error');
              }
    
          })
      }
  }
}
</script>

