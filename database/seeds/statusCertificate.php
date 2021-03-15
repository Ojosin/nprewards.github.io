<?php

use Illuminate\Database\Seeder;

class statusCertificate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

	    DB::table('m_status_certificate')->insert([
	        'kode_status' => '00',
	        'kode_description' => 'Klarifikasi Data',
	    ]); 
	    DB::table('m_status_certificate')->insert([
	        'kode_status' => '01',
	        'kode_description' => 'Penilaian',
	    ]); 
	    DB::table('m_status_certificate')->insert([
	        'kode_status' => '02',
	        'kode_description' => 'Pemutusan',
	    ]); 
	    DB::table('m_status_certificate')->insert([
	        'kode_status' => '03',
	        'kode_description' => 'Registrasi Kadin & Cetak SBU',
	    ]); 
	    DB::table('m_status_certificate')->insert([
	        'kode_status' => '04',
	        'kode_description' => 'Teregistrasi',
	    ]); 
	    DB::table('m_status_certificate')->insert([
	        'kode_status' => '05',
	        'kode_description' => 'Telah dileges',
	    ]); 
	    DB::table('m_status_certificate')->insert([
	        'kode_status' => '06',
	        'kode_description' => 'Proses Registrasi Ulang',
	    ]); 
	    DB::table('m_status_certificate')->insert([
	        'kode_status' => '07',
	        'kode_description' => 'Re-Registrasi Kadin & Cetak SBU',
	    ]); 
	    DB::table('m_status_certificate')->insert([
	        'kode_status' => '08',
	        'kode_description' => 'Teregistrasi Ulang',
	    ]); 
	    DB::table('m_status_certificate')->insert([
	        'kode_status' => '09',
	        'kode_description' => 'Perlu Kelengkapan Data',
	    ]); 
	    DB::table('m_status_certificate')->insert([
	        'kode_status' => '99',
	        'kode_description' => 'De-Registered & SBU Expired',
	    ]); 
    }
}
