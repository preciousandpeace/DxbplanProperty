<?php

use Illuminate\Database\Seeder;

class SettingSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\App\Settings::create([
			'name' 			=> 'Regina',
		]);\App\Settings::create([
			'name' 			=> 'o2',
		]);\App\Settings::create([
			'name' 			=> 'theSquare',
		]);\App\Settings::create([
			'name' 			=> 'samaya',
		]);
    }
}
