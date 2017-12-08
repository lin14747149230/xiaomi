<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$d = [];

        for($i=0;$i<100;$i++){
        	$data = [];
        	$data['username'] = str_random(9);
        	$data['password'] = Hash::make('secret');
        	$data['email'] = str_random(10).'@163.com';
        	$data['profile'] = '/uploads/2017-12-01/img_5a2119a6a3e2b.jpeg';

        	$d[] = $data;
        	
        }

        	DB::table('users')->insert($d);	
    }
}
