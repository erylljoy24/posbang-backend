<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('categories')->delete();
        $users = [
            [
                'name' => 'Drinks',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
	        	'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Burgers',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
	        	'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Spaghetti',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
	        	'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Combo Meal',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
	        	'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Rice Meal',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('categories')->insert($users);
    }
}
