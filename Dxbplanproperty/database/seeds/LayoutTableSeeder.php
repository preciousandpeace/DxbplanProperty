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
			'name' 				=> 'The Regina',
			'slug' 				=> 'The_Regina',
			'image' 			=> 'place1',
			'price' 			=> 109000,
		]);\App\Layout::create([
			'name' 				=> 'The 02',
			'slug'				=> 'The_02',
			'image'				=> 'place2',
			'price'				=> 109000
		]);\App\Layout::create([
			'name' 				=> 'The Square',
			'slug' 				=> 'The_Square',
			'image' 			=> 'place3',
			'price' 			=> 109000,
		]);\App\Layout::create([
			'name' 				=> 'The samaya',
			'slug' 				=> 'The_Samaya',
			'image' 			=> 'place4',
			'price' 			=> 109000,
		]);
    }
}
