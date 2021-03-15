<template>
<div>
  <div class="limiter">
    <div class="container-login100" style="background: url('assets/themes/login/images/bg-peta.jpg'); background-size: cover;">
      <div class="wrap-forgot100 pt-4 p-b-30">
          <form class="login100-form validate-form"  @submit="change_password">
          <div class="login100-form-avatar mt-4">
              <img src="assets/themes/login/logo.png" alt="INKINDO">
          </div>

          <span class="forgot100-form-title mt-4 mb-2 pb-1">
            Ubah Password
          </span>

      

          <div class="wrap-input100 validate-input m-b-10 mb-3" >
              <input type="password" name="password" id="password" @change="cek_password_confirm"  placeholder="Password " :class="{'is-invalid':errors.password}"   v-model="data.password" class="inputforgot100">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-envelope"></i>
              </span>
              <div  v-if="errors.password"> <div style="color:red">{{errors.password[0]}} </div>    </div>
          </div>


          <div class="wrap-input100 validate-input m-b-10 mb-3" >
              <input type="password" name="retype_password" @change="cek_password_confirm" id="retype_password"  placeholder="Confirmasi Password " :class="{'is-invalid':errors.retype_password}"   v-model="data.retype_password" class="inputforgot100">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-envelope"></i>
              </span>
              <div  v-if="errors.retype_password"> <div style="color:red">{{errors.retype_password[0]}} </div>    </div>
          </div>

          

          <div class="container-login100-form-btn p-t-10">
              <button type="submit" name="simpan" class="login100-form-btn mt-1" :disabled="dis" >
              Ubah Password
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

/* change password harusnya dari key secret yang ada di table database  */
import {mapActions,mapMutations,mapGetters,mapState} from 'vuex';
import VueRecaptcha from 'vue-recaptcha';
export default {
  components: { VueRecaptcha },
  data(){
    return{
      errors:[],
      type_user : this.$route.query.type_user,
      dis : true,
      text_login:'Login',
      data : {
        email:this.$route.query.email,
        type_user : this.$route.query.type_user,
        id : this.$route.query.id,
        password : '',
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
    // ...mapState(['errors'])
  },
  methods:{
    ...mapActions('auth',['submit']),
    ...mapMutations(['CLEAR_ERRORS']),
    cek_password_confirm(){
      var app = this;
      axios.post('/api/cek_password_confirm',app.data)
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
    change_password(e){
      e.preventDefault();
      var app = this;
      axios.post('/api/change_password',app.data)
      .then((response)=>{
          app.dis = false;
          app.errors = '';
          swal('Success','Ubah Password Berhasil','success');
          app.$router.push('/login?type_user='+app.data.type_user)
          
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
              swal('Error',resp.response.data.message,'error');
          }

      })
    }
  }
}
</script>
