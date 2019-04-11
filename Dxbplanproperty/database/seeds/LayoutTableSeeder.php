<?php

use Illuminate\Database\Seeder;

class LayoutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		\App\Layout::create([
			'name' 			=> 'Regina',
//			'slug' 			=> 'Regina',
		]);\App\Layout::create([
			'name' 			=> '02',
//			'slug'			=> '02'
		]);\App\Layout::create([
			'name' 			=> 'theSquare',
//			'slug' 			=> 'theSquare',
		]);\App\Layout::create([
			'name' 			=> 'samaya',
//			'slug' 			=> 'samaya',
		]);
    }
}
