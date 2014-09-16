<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

        $categories = Category::lists('id');

		foreach(range(1, 10) as $index)
		{
			Product::create([
                'title' =>  $faker->sentence(3),
                'description'   =>  $faker->paragraph(1),
                'price'     =>  $faker->numberBetween(1000, 50000),
                'available' =>  $faker->boolean(),
                'category_id'   =>  $faker->randomElement($categories)
			]);
		}
	}

}