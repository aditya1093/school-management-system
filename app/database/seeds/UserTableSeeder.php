<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
        DB::table('users')->delete();

        User::create(array('firstname'=>'Mr.','lastname'=>'Admin','login'=>'admin','email' => 'admin@school.dev','group'=>'Admin','address'=>'Admin Address Here',"password"=> Hash::make("123456")));
        User::create(array('firstname'=>'Mr.','lastname'=>'Other','login'=>'other','email' => 'other@school.dev','group'=>'Other','address'=>'other Address Here',"password"=> Hash::make("123456")));
	}

}