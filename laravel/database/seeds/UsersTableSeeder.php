<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->delete();
        $users = [
            [
                'name' => 'John Doe',
                'email' => 'john@gmail.com',
                'password' => Hash::make('password'),
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
	        	'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'John Dex',
                'email' => 'dex@gmail.com',
                'password' => Hash::make('password'),
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
	        	'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Lyka Joy',
                'email' => 'joy@gmail.com',
                'password' => Hash::make('password'),
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
	        	'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('users')->insert($users);
    }
}
