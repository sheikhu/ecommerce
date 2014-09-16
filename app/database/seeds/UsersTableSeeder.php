<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();


			User::create([
            'username'  => 'sheikhu',
            'email'     =>  'sheikhu02@gmail.com',
            'password'  =>  'passer'
			]);

	}

}
