/*
	 FOR SETTING GLOBAL 
    CREATED BY ARIEF MANGGALA PUTRA 
    1 SEPT 2019 
    @ariefmanggalaputra25@gmail.com
    mangggalcorp.com
*/

import $axios from '../api.js'

/* this for declare  state */
const state = ()=>({
	provinsi : [],
	bentuk_bu : [],
	golongan_bu : [],
	kualifikasi_bu : [],
	kabupaten : [],
	status_sertifikasi : [],
	jabatan : [],
	pendidikan : [],
	negara : [],
	negara_by_id : [],
	jabatan_by_id : [],
	pendidikan_by_id : [],
	klasifikasi_sb : [],
	klasifikasi_bl : [],
	group : [],

})


/*  this form assign state */
const mutations ={
	PROVINSI(state,payload){
		state.provinsi  = payload
	},	
	BENTUK_BU(state,payload){
		state.bentuk_bu  = payload
	},	
	GOLONGAN_BU(state,payload){
		state.golongan_bu  = payload
	},	
	KUALIFIKASI_BU(state,payload){
		state.kualifikasi_bu  = payload
	},	
	STATUS_SERTIFIKASI(state,payload){
		state.status_sertifikasi  = payload
	},	
	KABUPATEN(state,payload){
		state.kabupaten  = payload
	},	
	JABATAN(state,payload){
		state.jabatan  = payload
	},	

	PENDIDIKAN(state,payload){
		state.pendidikan  = payload
	},	

	NEGARA(state,payload){
		state.negara  = payload
	},	
	
	NEGARA_BY_ID(state,payload){
		state.negara_by_id  = payload
	},	
	
	JABATAN_BY_ID(state,payload){
		state.jabatan_by_id  = payload
	},	
	PENDIDIKAN_BY_ID(state,payload){
		state.pendidikan_by_id  = payload
	},	
	KLASIFIKASI_SB(state,payload){
		state.klasifikasi_sb  = payload
	},	
	KLASIFIKASI_BL(state,payload){
		state.klasifikasi_bl  = payload
	},	
	GROUP(state,payload){
		state.group  = payload
	},	
	
}


/* this for setting function axios*/
const actions = {
	/* For get all get_provinsi */
	get_provinsi({commit},payload){
		return new Promise((resolve,reject)=>{
			$axios.get('/get_provinsi')
			.then((response)=>{
				commit('PROVINSI',response.data);
				resolve(response.data);
			})
		})
	},
	get_bentuk_bu({commit},payload){
		return new Promise((resolve,reject)=>{
			$axios.get('/get_bentuk_bu')
			.then((response)=>{
				commit('BENTUK_BU',response.data);
				resolve(response.data);
			})
		})
	},
	get_golongan_bu({commit},payload){
		return new Promise((resolve,reject)=>{
			$axios.get('/get_golongan_bu')
			.then((response)=>{
				commit('GOLONGAN_BU',response.data);
				resolve(response.data);
			})
		})
	},
	get_kualifikasi_bu({commit},payload){
		return new Promise((resolve,reject)=>{
			$axios.get('/get_kualifikasi_bu')
			.then((response)=>{
				commit('KUALIFIKASI_BU',response.data);
				resolve(response.data);
			})
		})
	},
	get_status_sertifikasi({commit},payload){
		return new Promise((resolve,reject)=>{
			$axios.get('/get_status_sertifikasi')
			.then((response)=>{
				commit('STATUS_SERTIFIKASI',response.data);
				resolve(response.data);
			})
		})
	},
	get_kabupaten({commit},payload){
		return new Promise((resolve,reject)=>{
			$axios.get('/get_kabupaten?kode_provinsi='+payload)
			.then((response)=>{
				commit('KABUPATEN',response.data);
				resolve(response.data);
			})
		})
	},	
	get_jabatan({commit},payload){
		return new Promise((resolve,reject)=>{
			$axios.get('/get_jabatan')
			.then((response)=>{
				commit('JABATAN',response.data);
				resolve(response.data);
			})
		})
	},	
	get_pendidikan({commit},payload){
		return new Promise((resolve,reject)=>{
			$axios.get('/get_pendidikan')
			.then((response)=>{
				commit('PENDIDIKAN',response.data);
				resolve(response.data);
			})
		})
	},	
	get_negara({commit},payload){
		return new Promise((resolve,reject)=>{
			$axios.get('/get_negara')
			.then((response)=>{
				commit('NEGARA',response.data);
				resolve(response.data);
			})
		})
	},	

	get_klasifikasi_sb({commit},payload){
		return new Promise((resolve,reject)=>{
			$axios.get('/get_klasifikasi_sb')
			.then((response)=>{
				commit('KLASIFIKASI_SB',response.data);
				resolve(response.data);
			})
		})
	},	

	get_group({commit},payload){
		return new Promise((resolve,reject)=>{
			$axios.get('/get_group')
			.then((response)=>{
				commit('GROUP',response.data);
				resolve(response.data);
			})
		})
	},	

	get_klasifikasi_bl({commit},payload){
		return new Promise((resolve,reject)=>{
			$axios.get('/get_klasifikasi_bl')
			.then((response)=>{
				commit('KLASIFIKASI_BL',response.data);
				resolve(response.data);
			})
		})
	},	

	get_negara_by_id({commit},payload){
		return new Promise((resolve,reject)=>{
			$axios.get('/get_negara_by_id?id_negara='+payload)
			.then((response)=>{
				commit('NEGARA_BY_ID',response.data);
				resolve(response.data);
			})
		})
	},	

	get_jabatan_by_id({commit},payload){
		return new Promise((resolve,reject)=>{
			$axios.get('/get_jabatan_by_id?id_jabatan='+payload)
			.then((response)=>{
				commit('JABATAN_BY_ID',response.data);
				resolve(response.data);
			})
		})
	},	

	get_pedidikan_by_id({commit},payload){
		return new Promise((resolve,reject)=>{
			$axios.get('/get_pedidikan_by_id?id_pendidikan='+payload)
			.then((response)=>{
				commit('PENDIDIKAN_BY_ID',response.data);
				resolve(response.data);
			})
		})
	},	


}


export default{
    namespaced:true,
    state,
    actions,
    mutations,
}
