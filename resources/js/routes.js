import Router from 'vue-router';
import Vue from 'vue';
import home from './pages/home.vue';
import login from './pages/login.vue';
import list_login from './pages/list_login.vue';
import forgot_password from './pages/forgot_password.vue';
import registration from './pages/registration.vue';
import change_password from './pages/change_password.vue';
import dashboard from './pages/dashboard.vue';
import user_group from './pages/user_group/index.vue';
import user_group_table from './pages/user_group/user_group.vue';
import user_group_create from './pages/user_group/create.vue';
import user_group_edit from './pages/user_group/edit.vue';

import user_bu from './pages/user_bu/index.vue';
import user_bu_table from './pages/user_bu/user_bu.vue';
import user_bu_create from './pages/user_bu/create.vue';
import user_bu_edit from './pages/user_bu/edit.vue';

import user_peng from './pages/user_peng/index.vue';
import user_peng_table from './pages/user_peng/user_peng.vue';
import user_peng_create from './pages/user_peng/create.vue';
import user_peng_edit from './pages/user_peng/edit.vue';

import data_administrasi from './pages/data_administrasi/index.vue';
import data_administrasi_table from './pages/data_administrasi/data_administrasi.vue';
import data_administrasi_create from './pages/data_administrasi/create.vue';
import data_administrasi_edit from './pages/data_administrasi/edit.vue';
import data_administrasi_detail from './pages/data_administrasi/detail.vue';

import akte_notaris from './pages/akte_notaris/index.vue';
import akte_notaris_table from './pages/akte_notaris/akte_notaris.vue';
import akte_notaris_create from './pages/akte_notaris/create.vue';
import akte_notaris_edit from './pages/akte_notaris/edit.vue';

import personil from './pages/personil/index.vue';
import personil_table from './pages/personil/personil.vue';
import personil_create from './pages/personil/create.vue';
import personil_edit from './pages/personil/edit.vue';
import personil_edit_kursus from './pages/personil/edit_kursus.vue';
import personil_edit_pendidikan from './pages/personil/edit_pendidikan.vue';
import personil_edit_pengalaman_kerja from './pages/personil/edit_pengalaman_kerja.vue';

import pengurus from './pages/pengurus/index.vue';
import pengurus_table from './pages/pengurus/pengurus.vue';
import pengurus_create from './pages/pengurus/create.vue';
import pengurus_edit from './pages/pengurus/edit.vue';

import pengalaman_bu from './pages/pengalaman_bu/index.vue';
import pengalaman_bu_table from './pages/pengalaman_bu/pengalaman_bu.vue';
import pengalaman_bu_create from './pages/pengalaman_bu/create.vue';
import pengalaman_bu_edit from './pages/pengalaman_bu/edit.vue';

import kualifikasi_bl from './pages/kualifikasi_bl/index.vue';
import kualifikasi_bl_table from './pages/kualifikasi_bl/kualifikasi_bl.vue';
import kualifikasi_bl_create from './pages/kualifikasi_bl/create.vue';
import kualifikasi_bl_edit from './pages/kualifikasi_bl/edit.vue';

import neraca from './pages/neraca/index.vue';
import neraca_table from './pages/neraca/neraca.vue';
import neraca_create from './pages/neraca/create.vue';
import neraca_edit from './pages/neraca/edit.vue';

import pemilik_saham from './pages/pemilik_saham/index.vue';
import pemilik_saham_table from './pages/pemilik_saham/pemilik_saham.vue';
import pemilik_saham_create from './pages/pemilik_saham/create.vue';
import pemilik_saham_edit from './pages/pemilik_saham/edit.vue';

import omset from './pages/omset/index.vue';
import omset_table from './pages/omset/omset.vue';
import omset_create from './pages/omset/create.vue';
import omset_edit from './pages/omset/edit.vue';

import rekening_bank from './pages/rekening_bank/index.vue';
import rekening_bank_table from './pages/rekening_bank/rekening_bank.vue';
import rekening_bank_create from './pages/rekening_bank/create.vue';
import rekening_bank_edit from './pages/rekening_bank/edit.vue';

import peralatan from './pages/peralatan/index.vue';
import peralatan_table from './pages/peralatan/peralatan.vue';
import peralatan_create from './pages/peralatan/create.vue';
import peralatan_edit from './pages/peralatan/edit.vue';

import kantor_cabang from './pages/kantor_cabang/index.vue';
import kantor_cabang_table from './pages/kantor_cabang/kantor_cabang.vue';
import kantor_cabang_create from './pages/kantor_cabang/create.vue';
import kantor_cabang_edit from './pages/kantor_cabang/edit.vue';

import store from './store.js';


Vue.use(Router)

const router = new Router({
	mode: 'history',
	linkActiveClass:'active',
	linkExactActiveClass: "exact-active",
	routes: [
		{
			path:'/home',
			name:'home',
			component:home,
			meta: {
				requiresAuth: true
			}
		},
		{
			path:'/user-group',
			name:'',
			component:user_group,
			meta: {
				requiresAuth: true,
				title:"Page - User Group"
			},
			children:[
				{
					path:'create',
					name:'user-group.create',
					component:user_group_create,
					meta : {
						title:'Add - Group',
					}
				},
				{
					path:'edit/:id',
					name:'user-group.edit',
					component:user_group_edit,
					meta : {
						title:'Edit - Group',
					}
				},
				{
					path:'',
					name:'user-group.data',
					component:user_group_table,
					meta : {
						title :'User Group'
					}
				}

			]
		},
		
		{
			path:'/user-bu',
			name:'',
			component:user_bu,
			meta: {
				requiresAuth: true,
				title:"Page - User Badan Usaha"
			},
			children:[
				{
					path:'create',
					name:'user-bu.create',
					component:user_bu_create,
					meta : {
						title:'Add - User Badan Usaha',
					}
				},
				{
					path:'edit/:id',
					name:'user-bu.edit',
					component:user_bu_edit,
					meta : {
						title:'Edit - User Badan Usaha',
					}
				},
				{
					path:'',
					name:'user-bu.data',
					component:user_bu_table,
					meta : {
						title :'Page - User Badan Usaha'
					}
				}

			]
		},		
		{
			path:'/user-peng',
			name:'',
			component:user_peng,
			meta: {
				requiresAuth: true,
				title:"Page - User Pengurus "
			},
			children:[
				{
					path:'create',
					name:'user-peng.create',
					component:user_peng_create,
					meta : {
						title:'Add - User Pengurus ',
					}
				},
				{
					path:'edit/:id',
					name:'user-peng.edit',
					component:user_peng_edit,
					meta : {
						title:'Edit - User Pengurus ',
					}
				},
				{
					path:'',
					name:'user-peng.data',
					component:user_peng_table,
					meta : {
						title :'User Pengurus '
					}
				}

			]
		},
		{
			path:'/data-administrasi',
			name:'',
			component:data_administrasi,
			meta: {
				requiresAuth: true,
				title:"Page - Data Administrasi "
			},
			children:[
				{
					path:'create',
					name:'data-administrasi.create',
					component:data_administrasi_create,
					meta : {
						title:'Add - Data Administrasi ',
					}
				},
				{
					path:'edit/:id',
					name:'data-administrasi.edit',
					component:data_administrasi_edit,
					meta : {
						title:'Edit - Data Administrasi ',
					}
				},
				{
					path:'detail/:no_berkas/:no_kta',
					name:'data-administrasi.detail',
					component:data_administrasi_detail,
					meta : {
						title:'Detail - Data Administrasi Detail ',
					}
				},
				{
					path:'',
					name:'data-administrasi.data',
					component:data_administrasi_table,
					meta : {
						title :'Data Administrasi '
					}
				}

			]
		},
		{
			path:'/akte-notaris',
			name:'',
			component:akte_notaris,
			meta: {
				requiresAuth: true,
				title:"Page - Akte Notaris "
			},
			children:[
				{
					path:'create',
					name:'akte-notaris.create',
					component:akte_notaris_create,
					meta : {
						title:'Add - Akte Notaris ',
					}
				},
				{
					path:'edit/:id',
					name:'akte-notaris.edit',
					component:akte_notaris_edit,
					meta : {
						title:'Edit - Akte Notaris ',
					}
				},
				{
					path:'',
					name:'akte-notaris.data',
					component:akte_notaris_table,
					meta : {
						title :'Akte Notaris '
					}
				}

			]
		},
		
		{
			path:'/personil',
			name:'',
			component:personil,
			meta: {
				requiresAuth: true,
				title:"Page - Personil "
			},
			children:[
				{
					path:'create',
					name:'personil.create',
					component:personil_create,
					meta : {
						title:'Add - Personil ',
					}
				},
				{
					path:'edit/:id',
					name:'personil.edit',
					component:personil_edit,
					meta : {
						title:'Edit - Personil ',
					}
				},
				{
					path:'edit_kursus/:id',
					name:'personil.edit_kursus',
					component:personil_edit_kursus,
					meta : {
						title:'Edit Kursus Personil ',
					}
				},
				{
					path:'edit_pendidikan/:id',
					name:'personil.edit_pendidikan',
					component:personil_edit_pendidikan,
					meta : {
						title:'Edit Kursus Personil ',
					}
				},
				{
					path:'edit_pengalaman_kerja/:id',
					name:'personil.edit_pengalaman_kerja',
					component:personil_edit_pengalaman_kerja,
					meta : {
						title:'Edit Kursus Personil ',
					}
				},
				
				
				{
					path:'',
					name:'personil.data',
					component:personil_table,
					meta : {
						title :'Personil '
					}
				}

			]
		},

		{
			path:'/pengurus',
			name:'',
			component:pengurus,
			meta: {
				requiresAuth: true,
				title:"Page - Pengurus "
			},
			children:[
				{
					path:'create',
					name:'pengurus.create',
					component:pengurus_create,
					meta : {
						title:'Add - Pengurus ',
					}
				},
				{
					path:'edit/:id',
					name:'pengurus.edit',
					component:pengurus_edit,
					meta : {
						title:'Edit - Pengurus ',
					}
				},
				{
					path:'',
					name:'pengurus.data',
					component:pengurus_table,
					meta : {
						title :'Pengurus '
					}
				}

			]
		},
		{
			path:'/pengalaman-bu',
			name:'',
			component:pengalaman_bu,
			meta: {
				requiresAuth: true,
				title:"Page - Pengalaman "
			},
			children:[
				{
					path:'create',
					name:'pengalaman-bu.create',
					component:pengalaman_bu_create,
					meta : {
						title:'Add - Pengalaman ',
					}
				},
				{
					path:'edit/:id',
					name:'pengalaman-bu.edit',
					component:pengalaman_bu_edit,
					meta : {
						title:'Edit - Pengalaman ',
					}
				},
				{
					path:'',
					name:'pengalaman-bu.data',
					component:pengalaman_bu_table,
					meta : {
						title :'Pengalaman '
					}
				}

			]
		},

		{
			path:'/neraca',
			name:'',
			component:neraca,
			meta: {
				requiresAuth: true,
				title:"Page - Neraca"
			},
			children:[
				{
					path:'create',
					name:'neraca.create',
					component:neraca_create,
					meta : {
						title:'Add - Neraca',
					}
				},
				{
					path:'edit/:id',
					name:'neraca.edit',
					component:neraca_edit,
					meta : {
						title:'Edit - Neraca',
					}
				},
				{
					path:'',
					name:'neraca.data',
					component:neraca_table,
					meta : {
						title :'Neraca'
					}
				}

			]
		},

		{
			path:'/pemilik-saham',
			name:'',
			component:pemilik_saham,
			meta: {
				requiresAuth: true,
				title:"Page - Kepemilikan Saham"
			},
			children:[
				{
					path:'create',
					name:'pemilik-saham.create',
					component:pemilik_saham_create,
					meta : {
						title:'Add - Kepemilikan Saham',
					}
				},
				{
					path:'edit/:id',
					name:'pemilik-saham.edit',
					component:pemilik_saham_edit,
					meta : {
						title:'Edit - Kepemilikan Saham',
					}
				},
				{
					path:'',
					name:'pemilik-saham.data',
					component:pemilik_saham_table,
					meta : {
						title :'Kepemilikan Saham'
					}
				}

			]
		},
		{
			path:'/omset',
			name:'',
			component:omset,
			meta: {
				requiresAuth: true,
				title:"Page - Kepemilikan Saham"
			},
			children:[
				{
					path:'create',
					name:'omset.create',
					component:omset_create,
					meta : {
						title:'Add - Kepemilikan Saham',
					}
				},
				{
					path:'edit/:id',
					name:'omset.edit',
					component:omset_edit,
					meta : {
						title:'Edit - Kepemilikan Saham',
					}
				},
				{
					path:'',
					name:'omset.data',
					component:omset_table,
					meta : {
						title :'Kepemilikan Saham'
					}
				}

			]
		},

		{
			path:'/peralatan',
			name:'',
			component:peralatan,
			meta: {
				requiresAuth: true,
				title:"Page - Peralatan"
			},
			children:[
				{
					path:'create',
					name:'peralatan.create',
					component:peralatan_create,
					meta : {
						title:'Add - Peralatan',
					}
				},
				{
					path:'edit/:id',
					name:'peralatan.edit',
					component:peralatan_edit,
					meta : {
						title:'Edit - Peralatan',
					}
				},
				{
					path:'',
					name:'peralatan.data',
					component:peralatan_table,
					meta : {
						title :'Peralatan'
					}
				}

			]
		},
		{
			path:'/kantor-cabang',
			name:'',
			component:kantor_cabang,
			meta: {
				requiresAuth: true,
				title:"Page - Kantor Cabang"
			},
			children:[
				{
					path:'create',
					name:'kantor-cabang.create',
					component:kantor_cabang_create,
					meta : {
						title:'Add - Kantor Cabang',
					}
				},
				{
					path:'edit/:id',
					name:'kantor-cabang.edit',
					component:kantor_cabang_edit,
					meta : {
						title:'Edit - Kantor Cabang',
					}
				},
				{
					path:'',
					name:'kantor-cabang.data',
					component:kantor_cabang_table,
					meta : {
						title :'Kantor Cabang'
					}
				}

			]
		},
		{
			path:'/rekening-bank',
			name:'',
			component:rekening_bank,
			meta: {
				requiresAuth: true,
				title:"Page - Rekening Bank"
			},
			children:[
				{
					path:'create',
					name:'rekening-bank.create',
					component:rekening_bank_create,
					meta : {
						title:'Add - Rekening Bank',
					}
				},
				{
					path:'edit/:id',
					name:'rekening-bank.edit',
					component:rekening_bank_edit,
					meta : {
						title:'Edit - Rekening Bank',
					}
				},
				{
					path:'',
					name:'rekening-bank.data',
					component:rekening_bank_table,
					meta : {
						title :'Rekening Bank'
					}
				}

			]
		},
		
		{
			path:'/klasifikasi-bl',
			name:'',
			component:kualifikasi_bl,
			meta: {
				requiresAuth: true,
				title:"Page - Klasifikasi Bidang Layanan "
			},
			children:[
				{
					path:'create',
					name:'kualifikasi-bl.create',
					component:kualifikasi_bl_create,
					meta : {
						title:'Add - Klasifikasi Bidang Layanan ',
					}
				},
				{
					path:'edit/:id',
					name:'kualifikasi-bl.edit',
					component:kualifikasi_bl_edit,
					meta : {
						title:'Edit - Klasifikasi Bidang Layanan ',
					}
				},
				{
					path:'',
					name:'kualifikasi-bl.data',
					component:kualifikasi_bl_table,
					meta : {
						title :'Klasifikasi Bidang Layanan '
					}
				}

			]
		},
		
		{
			path: '/login',
			component: login,
			name:'login',
			meta: {
				title: 'Page - Login'
			}
		},
		
		{
			path: '/change_password',
			component: change_password,
			name:'change_password',
			meta: {
				title: 'Page - Change Password'
			}
		},
		
		{
			path: '',
			component: list_login,
			name:'list_login',
			meta: {
				title: 'NPR - INDONESIA'
			}
		},
		{
			path: '/forgot-password',
			component: forgot_password,
			name:'forgot_password',
			meta: {
				title: 'Page - Forgot Password'
			}
		},
		{
			path: '/registration',
			component: registration,
			name:'registration',
			meta: {
				title: 'Page - Registrasi'
			}
		},

		{
			path: '/dashboard',
			component: dashboard,
			name:'registration',
			meta: {
				title: 'Page - Dashboard',
				requiresAuth: true,
			}
		},

		
	]
})


router.beforeEach((to,from,next)=>{
	store.commit('CLEAR_ERRORS');
	document.title = to.meta.title
	if(to.matched.some(record=>record.meta.requiresAuth)){
		let auth = store.getters.isAuth

		if(!auth){
			next({name:'login'})
		}else{
			
			next()
		}
	}else{
		next()
	}
})

export default router