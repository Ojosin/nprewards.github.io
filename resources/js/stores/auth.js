import { reject } from 'lodash'
import $axios from '../api.js'

const state = ()=>({
    
})

const mutations ={

}

const actions={
    submit({commit},payload){
        localStorage.setItem('token',null)
        commit('SET_TOKEN',null,{root:true})
        return new Promise((resolve,reject)=>{
            $axios.post('/auth/login',payload)
            .then((response)=>{
                if(response.data.access_token !=''){
                    
                    localStorage.setItem('token',response.data.access_token)
                    commit('SET_TOKEN',response.data.access_token,{root:true})
                }
                else{   
                    
                    commit('SET_ERRORS',{invalid:'Username/Password Salah'},{root:true})
                    swal('Error','Username/Password Salah','error');
                }
                resolve(response.data)
            })
            .catch((error)=>{
                console.log(error);
                if(error.response.status == 401){
                    swal('Error','Username/Password Salah','error');
                }
            })
        })
    },
    registration({commit},payload){
        localStorage.setItem('token',null);
        commit('SET_TOKEN',null,{root:true})
        return new Promise((resolve,reject)=>{
            
        })
    }
}

export default{
    namespaced:true,
    state,
    actions,
    mutations
}
