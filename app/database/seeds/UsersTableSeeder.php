<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();


			Sentry::createUser([
            'email'     =>  'sheikhu02@gmail.com',
            'password'  =>  'passer',
            'activated' => true
			]);

	}

}
