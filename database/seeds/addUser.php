<?php

use Illuminate\Database\Seeder;

class addUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insert([
            'name' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'username' =>'superadmin',
            'password'=>bcrypt('123123')
        ]); 
    }
}
