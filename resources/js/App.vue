<template>
    <div>
        <div v-if="isAuth">
            <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
                <div class="navbar-bg"></div>
                    <app-header/>
                
                <!-- Main Content -->
                <div class="app-main">
                    <app-sidebar />   
                    <div class="app-main__outer">
                          
                        <div class="app-main__inner"> 
                            <router-view></router-view>           
                        </div>
                        <app-footer />
                    </div>
                </div>
            </div>
        </div>
        <div v-else>
            <router-view></router-view>
        </div>
  </div>
</template>
<script>
    import { mapState, mapGetters } from 'vuex'
    import header from './components/header.vue'
    import footer from './components/footer.vue'
    import sidebar from './components/sidebar.vue'

    export default{
        computed: {
            ...mapState(['token']),
            ...mapGetters(['isAuth'])
        },
        components:{
            'app-header':header,
            'app-footer':footer,
            'app-sidebar':sidebar,
        }
    }
</script>

