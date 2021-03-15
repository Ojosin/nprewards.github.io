<?php

use Illuminate\Database\Seeder;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('m_pendidikan')->insert([
	        'nama_pendidikan' => 'SLTA',
	        
	    ]); 
         DB::table('m_pendidikan')->insert([
	        'nama_pendidikan' => 'D3',
	        
	    ]); 
         DB::table('m_pendidikan')->insert([
	        'nama_pendidikan' => 'D4',
	        
	    ]); 
         DB::table('m_pendidikan')->insert([
	        'nama_pendidikan' => 'S1',
	        
	    ]); 
         DB::table('m_pendidikan')->insert([
	        'nama_pendidikan' => 'S2',
	        
	    ]); 
         DB::table('m_pendidikan')->insert([
	        'nama_pendidikan' => 'S3',
	        
	    ]); 
    }
}
