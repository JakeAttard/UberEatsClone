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
        // Administrator
        DB::table('users')->insert([
            'role' => 'administrator',
			'name' => 'admin',
			'email' => 'admin@admin.com',
			'address' => '1 admin street Brisbane',
			'password' => bcrypt('admin123')
        ]);

        // Consumer
        DB::table('users')->insert([
            'role' => 'consumer',
			'name' => 'jakeattard',
			'email' => 'jake@gmail.com',
			'address' => '1 Jake street GC',
			'password' => bcrypt('admin123')
        ]);

        // Consumer
        DB::table('users')->insert([
            'role' => 'consumer',
			'name' => 'teacher',
			'email' => 'teacher@griffith.edu.au',
			'address' => '1 Parklands Dr Southport QLD 4215',
			'password' => bcrypt('teacher123')
        ]);
        
        // Restaurant
        DB::table('users')->insert([
            'role' => 'restaurant',
			'name' => 'Burger King',
			'email' => 'owner@burgerking.com',
			'address' => '1 test street google',
			'password' => bcrypt('12345678')
        ]);
        
        // Restaurant
        DB::table('users')->insert([
            'role' => 'restaurant',
			'name' => 'Hungry Jacks',
			'email' => 'owner@hungryjacks.com',
			'address' => '1 jacks street upper coomera',
			'password' => bcrypt('12345678')
        ]);
        
        // Restaurant
        DB::table('users')->insert([
            'role' => 'restaurant',
			'name' => 'McDonalds',
			'email' => 'owner@mcdonalds.com',
			'address' => '1 mc street harbour town',
			'password' => bcrypt('12345678')
        ]);
        
        // Restaurant
        DB::table('users')->insert([
            'role' => 'restaurant',
			'name' => 'KFC',
			'email' => 'kfcpimp@kfc.com',
			'address' => '46 kfc street pimp',
			'password' => bcrypt('12345678')
        ]);
        
        // Restaurant
        DB::table('users')->insert([
            'role' => 'restaurant',
			'name' => 'Red Rooster',
			'email' => 'redrooster@rd.com',
			'address' => '21 red street surfers paradise',
			'password' => bcrypt('12345678')
        ]);
        
        // Restaurant
        DB::table('users')->insert([
            'role' => 'restaurant',
			'name' => 'Subway',
			'email' => 'owner@subway.com',
			'address' => '1 subway drive cres fake',
			'password' => bcrypt('12345678')
        ]);
        
        // Restaurant
        DB::table('users')->insert([
            'role' => 'restaurant',
			'name' => 'Deep South Chicken',
			'email' => 'owner@dsc.com',
			'address' => '160 Old Pacific Highway Coomera',
			'password' => bcrypt('12345678')
        ]);
        
        // Restaurant
        DB::table('users')->insert([
            'role' => 'restaurant',
			'name' => 'Zambrero Oxenford',
			'email' => 'owner@zambrero.com',
			'address' => 'Tenancy 3, Global Plaza, Oxenford',
			'password' => bcrypt('12345678')
        ]);

        // Restaurant
        DB::table('users')->insert([
            'role' => 'restaurant',
			'name' => 'Jacks Kebabs',
			'email' => 'owner@jk.com',
			'address' => '170 Old Pacific Highway Oxenford',
			'password' => bcrypt('12345678')
        ]);

        // Restaurant
        DB::table('users')->insert([
            'role' => 'restaurant',
			'name' => 'Carls Jr Pimpama',
			'email' => 'owner@cjp.com',
			'address' => '27 Dixon Drive Pimpama',
			'password' => bcrypt('12345678')
        ]);

        // Restaurant
        DB::table('users')->insert([
            'role' => 'restaurant',
			'name' => 'Guzman Y Gomez',
			'email' => 'owner@gyg.com',
			'address' => 'J/1 Commercial St Coomera',
			'password' => bcrypt('12345678')
        ]);

        // Restaurant
        DB::table('users')->insert([
            'role' => 'restaurant',
			'name' => 'Royal Kebabs Fish & Chips',
			'email' => 'shop@rkfc.com',
			'address' => '27 Dixon Drive Pimpama',
			'password' => bcrypt('12345678')
        ]);
        
        // Consumer
        DB::table('users')->insert([
            'role' => 'consumer',
			'name' => 'luke',
			'email' => 'luke@gmail.com',
			'address' => '1 luke street GC',
			'password' => bcrypt('12345678')
        ]);

        // Consumer
        DB::table('users')->insert([
            'role' => 'consumer',
			'name' => 'Josh',
			'email' => 'josh@gmail.com',
			'address' => '1 josh street GC',
			'password' => bcrypt('12345678')
        ]);

        // Consumer
        DB::table('users')->insert([
            'role' => 'consumer',
			'name' => 'Mary',
			'email' => 'mary@gmail.com',
			'address' => '1 mary street GC',
			'password' => bcrypt('12345678')
        ]);

        // Consumer
        DB::table('users')->insert([
            'role' => 'consumer',
			'name' => 'lucy',
			'email' => 'lucy@gmail.com',
			'address' => '1 lucy street GC',
			'password' => bcrypt('12345678')
        ]);

        // Consumer
        DB::table('users')->insert([
            'role' => 'consumer',
			'name' => 'rob',
			'email' => 'rob@gmail.com',
			'address' => '1 Rob street GC',
			'password' => bcrypt('12345678')
        ]);
    }
}
