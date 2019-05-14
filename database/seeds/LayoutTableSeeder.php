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
            'image' => 'layouts/April2019/C4jOUhlwfU72kfNiZHCh.jpg',
            'price' => 109000,
        ]);
        \App\Layout::create([
            'name' => 'The 02',
            'slug' => 'The_02',
            'address' => 'This is The 02 address',
            'image' => 'layouts/April2019/zrlEcyGlXmSTRURUwUWS.jpg',
            'price' => 109000
        ]);
        \App\Layout::create([
            'name' => 'The Square',
            'slug' => 'The_Square',
            'address' => 'This is The Square address',
            'image' => 'layouts/April2019/cdCbrCXZ2cseB6FTFo26.jpg',
            'price' => 109000,
        ]);
        \App\Layout::create([
            'name' => 'The samaya',
            'slug' => 'The_Samaya',
            'address' => 'This is The samaya address',
            'image' => 'layouts/April2019/YcXGqjjL0lJn2J18p1Bb.jpg',
            'price' => 109000,
        ]);
    }
}
