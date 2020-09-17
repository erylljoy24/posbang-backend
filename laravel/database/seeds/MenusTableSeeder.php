<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('menus')->delete();
        $users = [
            [
                'name' => 'Coke',
                'cat_id' => 1,
                'amount' => 25.00,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
	        	'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pepsi',
                'cat_id' => 1,
                'amount' => 25.00,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
	        	'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sprite',
                'cat_id' => 1,
                'amount' => 25.00,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
	        	'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Double Patty w/ extra cheese',
                'cat_id' => 2,
                'amount' => 50.00,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
	        	'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Double Chicken Time',
                'cat_id' => 2,
                'amount' => 55.00,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
	        	'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => '1 Pound Burger',
                'cat_id' => 2,
                'amount' => 150.00,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
	        	'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Spag in Pan',
                'cat_id' => 3,
                'amount' => 50.00,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
	        	'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Double Spag',
                'cat_id' => 3,
                'amount' => 100.00,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
	        	'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Burger w/ Spaghetti',
                'cat_id' => 4,
                'amount' => 150.00,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
	        	'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Burger Cheese w/ Spaghetti',
                'cat_id' => 4,
                'amount' => 150.00,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
	        	'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Burger Cheese w/ Spaghetti & Coke',
                'cat_id' => 4,
                'amount' => 150.00,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
	        	'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        DB::table('menus')->insert($users);
    }
}
