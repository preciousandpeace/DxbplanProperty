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
            'name' => 'The Regina',
            'slug' => 'The_Regina',
            'address' => 'This is The Regina address',
            'image' => 'place1',
            'price' => 109000,
        ]);
        \App\Layout::create([
            'name' => 'The 02',
            'slug' => 'The_02',
            'address' => 'This is The 02 address',
            'image' => 'place2',
            'price' => 109000
        ]);
        \App\Layout::create([
            'name' => 'The Square',
            'slug' => 'The_Square',
            'address' => 'This is The Square address',
            'image' => 'place3',
            'price' => 109000,
        ]);
        \App\Layout::create([
            'name' => 'The samaya',
            'slug' => 'The_Samaya',
            'address' => 'This is The samaya address',
            'image' => 'place4',
            'price' => 109000,
        ]);
    }
}
