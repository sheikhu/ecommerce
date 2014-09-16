<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

        Eloquent::unguard();
		foreach(range(1, 10) as $index)
		{
            $name = $faker->sentence(2);
			Category::create([
                'name' => $name,
                'slug' => Str::slug($name)
			]);
		}
	}

}
