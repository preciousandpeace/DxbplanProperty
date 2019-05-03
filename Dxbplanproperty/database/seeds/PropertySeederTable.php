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

    	\App\Property::create([
    		'layout_id'		=> '1',
			'description'	=> $faker->text(250),
		]);

		\App\Property::create([
			'layout_id'		=> '2',
			'description'	=> $faker->text(250),
		]);

		\App\Property::create([
			'layout_id'		=> '3',
			'description'	=> $faker->text(250),
		]);

		\App\Property::create([
			'layout_id'		=> '4',
			'description'	=> $faker->text(250),
		]);
    }
}
