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
      <div class="wrap-login100 pt-4 p-b-30">
        <form class="login100-form validate-form" @submit="postLogin">
          <div class="login100-form-avatar mt-4">
              <img src=" assets/themes/login/logo.png " alt="INKINDO">
          </div>


          <span class="login100-form-title mt-4 mb-3 pb-1" >
            <div v-if="data.type_user === 'user_bu'">
              Masuk Akun Badan Usaha
            </div>
            <div v-else-if="data.type_user === 'user_admin'">
              Masuk Akun Admin
            </div>
            <div v-else>
              Masuk Akun Pengurus
            </div>
          </span>
 
          <div class="wrap-input100 validate-input m-b-10" data-validate = " masih kosong">
            <input class="input100" type="text" name="email" placeholder="Email" id="email" v-model="data.email" >
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user"></i>
            </span>
            <span class="text-password text-danger has-error" id="email_msg"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-10" data-validate = " masih kosong">
            <input class="input100" type="password" name="password" id="password" placeholder="Kata Sandi" v-model="data.password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock"></i>
            </span>
            <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
          </div>

          <!-- <vue-recaptcha sitekey="6LcTG8AZAAAAAHhzZXvM9uwAQ4mdS4OfvcxSEWym"></vue-recaptcha> -->

          <div class="container-login100-form-btn p-t-10">
            <button class="login100-form-btn mt-1" type="submit">
              Masuk
            </button>
                <span class="forgot mt-4">

                  <span class="label mb-2 mr-2 float-left">
                    <div v-if="data.type_user === 'user_bu'">
                      <router-link to="/forgot-password?type_user=user_bu" class="linkdaftar"> Lupa Password? </router-link>
                    </div>
                    <div v-else-if="data.type_user === 'user_admin'">
                      <router-link to="/forgot-password?type_user=user_admin" class="linkdaftar"> Lupa Password? </router-link>
                    </div>
                    <div v-else>
                      <router-link to="/forgot-password?type_user=user_peng" class="linkdaftar"> Lupa Password? </router-link>
                    </div>
                  </span>
<!-- 
                    <span class="label mb-2 mr-2 float-left">
                      <router-link to="/forgot-password" class="linkforgot"> Lupa Password? </router-link>
                    </span> -->

                    <span class="label mb-2 mr-2 float-right">
                      <div v-if="data.type_user === 'user_bu'">
                        Tidak punya akun ? 
                        <router-link to="/registration?type_user=user_bu" class="linkdaftar"> Daftar Sekarang </router-link>
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
      dis : false,
      text_login:'Login',
      data : {
        email:'',
        password:'',
        type_user: this.$route.query.type_user,
      }
    }
  },
  created(){
    if(this.isAuth){
      document.location.href = "/dashboard";
    }
    else
    {
      var type = this.$route.query.type_login;
      if(type=='activatedAccount')
      {
        axios.post('/api/activatedAccount',{id:this.$route.query.id,email:this.$route.query.email})
          .then((response)=>{
            if(response.data.status=='success')
            {
              this.$router.push({name:'login',query:{type_user:this.$route.query.type_user} });
              swal('Success','Akun anda telah aktif silahkan login','success');
            }
            else
            { 
              this.$router.push({name:'login',query:{type_user:this.$route.query.type_user} });
            }
            
          })
          .catch(function(resp){
              if(!resp.response.data.errors)
              {
                  swal('Error',resp.response.data.message,'error');
              }
    
          })
      }
    }


  },
  computed:{
    ...mapGetters(['isAuth']),
    ...mapState(['errors'])
  },
  methods:{
    ...mapActions('auth',['submit']),
    ...mapMutations(['CLEAR_ERRORS']),
    postLogin(e){
      e.preventDefault();
      this.submit(this.data).then(()=>{
        this.dis = true;
        this.text_login = 'Loading ....';
        if(this.isAuth){
          this.CLEAR_ERRORS();
           this.$router.push({name:'dashboard'})
        }
        else
        {
          alert('gagal');
        }
      })
    }
  }
}
</script>

