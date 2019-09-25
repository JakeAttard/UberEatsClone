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

        DB::table('users')->insert([
            'role' => 'consumer',
			'name' => 'jakeattard',
			'email' => 'jake@gmail.com',
			'address' => '1 Jake street GC',
			'password' => bcrypt('admin123')
        ]);
        
        DB::table('users')->insert([
            'role' => 'restaurant',
			'name' => 'burger king',
			'email' => 'owner@burgerking.com',
			'address' => '1 test street google',
			'password' => bcrypt('admin123')
		]);
    }
}
