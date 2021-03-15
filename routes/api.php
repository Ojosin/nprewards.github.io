<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth',
    'namespace'=>'API',

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

Route::group([

    'middleware' => 'api',
    'namespace'=>'API',

], function ($router) {
    Route::post('registration', 'AuthController@registration');
    Route::post('cek_email', 'AuthController@cek_email');
    Route::post('activatedAccount', 'AuthController@activatedAccount');
    Route::post('cek_email_exist', 'AuthController@cek_email_exist');
    Route::post('send_forgot', 'AuthController@send_forgot');
    Route::post('cek_password_confirm', 'AuthController@cek_password_confirm');
    Route::post('change_password', 'AuthController@change_password');
});


Route::group(['namespace' => 'API','middleware'=>'check-token'], function(){
    Route::resource('/group','GroupController',['except'=>'show','store']);
    Route::resource('/user','UserController',['except'=>'show','store']);
    Route::resource('/data_administrasi','DataAdministrasiController',['except'=>'show','store']);
    Route::resource('/kantor_cabang','KantorCabangController',['except'=>'show','store']);
    Route::resource('/peralatan','PeralatanController',['except'=>'show','store']);
    Route::resource('/rekening_bank','RekeningBankController',['except'=>'show','store']);
    Route::resource('/omset','OmsetController',['except'=>'show','store']);
    Route::resource('/pemilik_saham','PemilikSahamController',['except'=>'show','store']);
    Route::resource('/neraca','NeracaController',['except'=>'show','store']);
    Route::resource('/kualifikasi_bl','KualifikasiBlController',['except'=>'show','store']);
    Route::resource('/personil','PersonilController',['except'=>'show','store']);
    Route::resource('/pengurus','PengurusController',['except'=>'show','store']);
    Route::resource('/akte_notaris','AkteNotarisController',['except'=>'show','store']);
    Route::resource('/pengalaman_bu','PengalamanBuController',['except'=>'show','store']);
    Route::get('/get_user_peng','UserController@get_user_peng');

    Route::get('/get_provinsi','AppController@get_provinsi');
    Route::get('/get_bentuk_bu','AppController@get_bentuk_bu');
    Route::get('/get_golongan_bu','AppController@get_golongan_bu');
    Route::get('/get_kualifikasi_bu','AppController@get_kualifikasi_bu');
    Route::get('/get_status_sertifikasi','AppController@get_status_sertifikasi');
    Route::get('/get_kabupaten','AppController@get_kabupaten');
    Route::get('/get_jabatan','AppController@get_jabatan');
    Route::get('/get_pendidikan','AppController@get_pendidikan');
    Route::get('/get_pendidikan_by_id','AppController@get_pendidikan_by_id');
    Route::get('/get_negara','AppController@get_negara');
    Route::get('/get_negara_by_id','AppController@get_negara_by_id');
    Route::get('/get_jabatan_by_id','AppController@get_jabatan_by_id');
    Route::get('/cetak_sertifikat','DataAdministrasiController@cetak_sertifikat');
    Route::get('/print_pengurus','PengurusController@print_pengurus');
    Route::get('/print_peralatan','PeralatanController@print_peralatan');
    Route::get('/print_pemilik_saham','PemilikSahamController@print_pemilik_saham');
    Route::get('/print_pengalaman_bu','PengalamanBuController@print_pengalaman_bu');
    Route::get('/print_neraca','NeracaController@print_neraca');
    Route::get('/get_klasifikasi_sb','AppController@get_klasifikasi_sb');
    Route::get('/get_klasifikasi_bl','AppController@get_klasifikasi_bl');
    Route::get('/get_group','AppController@get_group');

});
