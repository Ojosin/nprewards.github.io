<?php

use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('m_jabatan')->insert([
	        'nama_jabatan' => 'Direktur Utama',
	        
	    ]); 
         DB::table('m_jabatan')->insert([
	        'nama_jabatan' => 'Direktur',
	        
	    ]); 
         DB::table('m_jabatan')->insert([
	        'nama_jabatan' => 'Wakil Direktur',
	        
	    ]); 
         DB::table('m_jabatan')->insert([
	        'nama_jabatan' => 'Komisaris Utama',
	        
	    ]); 
         DB::table('m_jabatan')->insert([
	        'nama_jabatan' => 'Komasaris',
	        
	    ]); 
         DB::table('m_jabatan')->insert([
	        'nama_jabatan' => 'Pesero Komanditer',
	        
	    ]); 

    }
}
