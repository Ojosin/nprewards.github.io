<template>
    <!-- Side-Nav-->

    <div class="app-sidebar sidebar-shadow">
        <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
        <div class="app-header__menu">
            <span>
                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                    <span class="btn-icon-wrapper">
                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                    </span>
                </button>
            </span>
        </div>    
        <div class="scrollbar-sidebar">
            <div class="app-sidebar__inner">
                <ul class="vertical-nav-menu">
                    <li class="app-sidebar__heading">Menu</li>
                    <li class="mb-1">
                        <router-link to="/dashboard" class="">
                            <i class="metismenu-icon fa fa-home" style="font-size:14px"></i>Dashboard 
                        </router-link>

                    </li>

                    <li class="mb-1">
                        <router-link to="/dashboard" class="">
                            <i class="metismenu-icon fa fa-print" style="font-size:14px"></i>Cetak SBU 
                        </router-link>
                    </li>

                    <li class="mb-1">
                        <router-link to="/dashboard" class="">
                            <i class="metismenu-icon fa fa-edit" style="font-size:14px"> </i>Input data leges 
                        </router-link>
                    </li>

                    <li class="mb-1">
                        <router-link to="/dashboard" class="">
                            <i class="metismenu-icon fa fa-upload" style="font-size:14px"></i>DRP / ENQUIRY 
                        </router-link>
                    </li>

                    
                    <li class="mb-1">
                        <a href="#">
                            <i class="metismenu-icon fa fa-users-cog"  style="font-size:14px"></i>
                            Pengelolaan Pengguna
						    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <router-link to="/user-bu" class="nav-link" > 
                                    <i class="metismenu-icon"></i> User Badan Usaha
                                </router-link>   
                            </li>
                            <li>
                                <router-link to="/user-peng" class="nav-link" > 
                                    <i class="metismenu-icon"></i> User Pengurus Inkindo
                                </router-link>   
                            </li>
                            <li>
                                <router-link to="/user-group" class="nav-link" > 
                                    <i class="metismenu-icon"></i> User Group
                                </router-link>   
                            </li>
                        </ul>
                    </li> 
                    <li class="mb-1">
                        <a href="#">
                            <i class="metismenu-icon fa fa-users-cog"  style="font-size:14px"></i>
                            Pengajuan Sertifikat
						    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <router-link to="/data-administrasi" class="nav-link" > 
                                    <i class="metismenu-icon"></i> Input Data Administrasi
                                </router-link>   
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>   
</template>
<script>

import axios  from './../api.js';

export default {
    data:function(){
        return {
            data_menu_parent:[],
            data_menu_sub:[],
            menu:[],
            questions: [
            ['test1.1', 'test1.2'],
            ['test2.1', 'test2.2']
            ]
        }
    },

    method:{
        get_url(p){
            return p.split('-');
        }
    }
}
</script>
