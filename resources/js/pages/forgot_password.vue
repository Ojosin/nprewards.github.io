<style type="text/css" scoped>
  @import '/assets/login/css/util.css';
  @import '/assets/login/css/main.css';
  @import '/assets/main.css';
</style>
<template>
<div>
  <div class="limiter">
    <div class="container-login100" style="background: url('assets/themes/login/images/bg-peta.jpg'); background-size: cover;">
      <div class="wrap-forgot100 pt-4 p-b-30">
          <form class="login100-form validate-form"  @submit="send_forgot">
          <div class="login100-form-avatar mt-4">
              <img src="assets/themes/login/logo.png" alt="INKINDO">
          </div>

          <span class="forgot100-form-title mt-4 mb-2 pb-1">
            Lupa Password Akun
          </span>

      

          <div class="wrap-input100 validate-input m-b-10 mb-3" >
              <input type="email" name="email" id="email" @change="cek_email_exist" placeholder="Email Badan Usaha" :class="{'is-invalid':errors.email}"   v-model="data.email" class="inputforgot100">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-envelope"></i>
              </span>
              <div  v-if="errors.email"> <div style="color:red">{{errors.email[0]}} </div>    </div>

          </div>
<!-- 
          <span class="captcha">
                <div class="g-recaptcha" data-sitekey="6LcTG8AZAAAAAHhzZXvM9uwAQ4mdS4OfvcxSEWym" data-callback="callCaptcha"></div>
                <div class="error text-danger text-captcha"></div>
          </span> -->

          <div class="container-login100-form-btn p-t-10">
              <button type="submit" name="simpan" class="login100-form-btn mt-1" :disabled="dis" >
              {{text_login}}
            </button>
                <span class="forgot pt-2 text-center">

                    <span class="label mb-2 mr-2 text-center">
                      <div v-if="type_user === 'user_bu'">
                        Kembali Kehalaman Masuk ?
                        <router-link to="/login?type_user=user_bu" class="linkdaftar">Klik disini</router-link>
                      </div>
                      <div v-else-if="type_user === 'user_admin'">
                        Kembali Kehalaman Masuk ?
                        <router-link to="/login?type_user=user_admin" class="linkdaftar">Klik disini</router-link>
                      </div>
                      <div v-else>
                        Kembali Kehalaman Masuk ?
                        <router-link to="/login?type_user=user_peng" class="linkdaftar">Klik disini</router-link>
                      </div>
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
      errors:[],
      type_user : this.$route.query.type_user,
      dis : true,
      text_login:'Kirim Permintaan',
      data : {
        email:'',
        type_user:this.$route.query.type_user,
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
    // ...mapState(['errors'])
  },
  methods:{
    ...mapActions('auth',['submit']),
    ...mapMutations(['CLEAR_ERRORS']),
    cek_email_exist(){
      var app = this;
      axios.post('/api/cek_email_exist',app.data)
      .then((response)=>{
          app.dis = false;
          app.errors = '';
      })
      .catch(function(resp){
          if(resp.response.data.errors)
          {
              app.dis = true;
              app.errors = resp.response.data.errors;                    
          }
          else
          { 
              app.dis = true;
              swal('Error',resp.response.data.message,'error');
          }

      })
    },
    send_forgot(e){
      e.preventDefault();
      var app = this;
      app.dis = true;
      app.text_login = 'Loading .....';
      axios.post('/api/send_forgot',app.data)
      .then((response)=>{
          app.dis = false;
          app.errors = '';
          app.text_login = 'Kirim Permintaan';
          swal('Success','Sukses kirim link ubah password','success');
          // app.$router.push({})
      })
      .catch(function(resp){
          if(resp.response.data.errors)
          {
              app.dis = true;
              app.errors = resp.response.data.errors;                    
          }
          else
          { 
              app.dis = false;
              app.text_login = 'Kirim Permintaan';
              swal('Error',resp.response.data.message,'error');
          }

      })
    }
  }
}
</script>
