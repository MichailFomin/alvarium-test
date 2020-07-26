<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('positions')->insert([
			[
				'position_name' => 'Manager',
				'created_at' => now(),
			],
			[
				'position_name' => 'Director',
				'created_at' => now(),
			],
			[
				'position_name' => 'Secretary',
				'created_at' => now(),
			],
			[
				'position_name' => 'Assistant',
				'created_at' => now(),
			],
		]);
    }
}
