<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PropertySeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
		// Regina
		for ($i = 1; $i <= 16; $i++) {
			\App\Property::create([
				'name' 			=> $faker->firstNameFemale,
				'slug'			=> 'Regina-' . $i,
			]);
		}

		// o2
		for ($i = 1; $i <= 16; $i++) {
			\App\Property::create([
				'name' 			=> $faker->firstNameFemale,
				'slug'			=> 'o2-' . $i,
			]);
		}

		// theSquare
		for ($i = 1; $i <= 16; $i++) {
			\App\Property::create([
				'name' 			=> $faker->firstNameFemale,
				'slug'			=> 'theSquare-' . $i,
			]);
		}

		// samaya
		for ($i = 1; $i <= 16; $i++) {
			\App\Property::create([
				'name' 			=> $faker->firstNameFemale,
				'slug'			=> 'samaya-' . $i,
			]);
		}
    }
}
