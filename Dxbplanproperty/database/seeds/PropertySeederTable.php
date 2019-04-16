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
				'layout_id'		=> $faker->biasedNumberBetween(1,4),
				'description'	=> $faker->text(200)
			]);
		}

		// o2
		for ($i = 1; $i <= 16; $i++) {
			\App\Property::create([
				'name' 			=> $faker->firstNameFemale,
				'slug'			=> 'o2-' . $i,
				'layout_id'	=> $faker->biasedNumberBetween(1,4),
				'description'	=> $faker->text(200)

			]);
		}

		// theSquare
		for ($i = 1; $i <= 16; $i++) {
			\App\Property::create([
				'name' 			=> $faker->firstNameFemale,
				'slug'			=> 'theSquare-' . $i,
				'layout_id'	=> $faker->biasedNumberBetween(1,4),
				'description'	=> $faker->text(200)

			]);
		}

		// samaya
		for ($i = 1; $i <= 16; $i++) {
			\App\Property::create([
				'name' 			=> $faker->firstNameFemale,
				'slug'			=> 'samaya-' . $i,
				'layout_id'	=> $faker->biasedNumberBetween(1,4),
				'description'	=> $faker->text(200)
			]);
		}
    }
}
