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
		for ($i = 1; $i <= 4; $i++) {
			\App\Property::create([
				'layout_id'		=> $faker->biasedNumberBetween(1,4),
				'description'		=> $faker->text(250),
			]);
		}
    }
}
