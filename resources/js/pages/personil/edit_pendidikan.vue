<template>    
    <div>
        <div class="row">
            <!-- <loading :active.sync="isLoading" 
            :can-cancel="true" 
            ></loading> -->
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="col-sm-4 mt-2 mb-3 pull-left" bis_skin_checked="1">
                            <button class="btn-shadow btn btn-success" style="color:#fff" ><i class="fa fa-plus fa-w-20"></i>
                            </button>
                            <div class="d-inline-block dropdown">
		                        <router-link class="btn btn-danger" :to="{name:'data-administrasi.detail',params:{no_berkas: $route.query.no_berkas,no_kta:$route.query.no_kta }}"><i class="fa fa-chevron-left"></i>
		                            Kembali
		                        </router-link>
		                    </div>
                        </div>
                        <div class="col-sm-3 mt-2 mb-3 pull-left" bis_skin_checked="1">

                        </div>
                        <table class="mb-0 table">
                            <thead>
                                <tr>
                                    <th>Nama </th>
                                    <th>Provinsi</th>
                                    <th>Kabupaten / Kota</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Kebangsaan</th>
                                    <th>Jabatan</th>
                                    <th>Data Pendidikan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</template>