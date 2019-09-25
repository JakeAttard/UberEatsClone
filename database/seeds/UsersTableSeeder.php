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
            'name' => 'test rest',
            'email' => 'testrest@gmail.com',
            'password' => bcrypt('pass'),
            'role' => 'restaurant',
            'address' => 'test rest address'
        ]);

        DB::table('users')->insert([
            'name' => 'test cons',
            'email' => 'testcons@gmail.com',
            'password' => bcrypt('pass'),
            'role' => 'consumer',
            'address' => 'test cons address'
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'admin',
            'address' => 'admin address'
        ]);
    }
}
