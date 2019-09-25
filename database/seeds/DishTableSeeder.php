<?php

use Illuminate\Database\Seeder;

class DishTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dishes')->insert([
            'name' => 'test rest dish 1',
            'price' => '10.00',
            'user_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);   
        
        DB::table('dishes')->insert([
            'name' => 'test rest dish 2',
            'price' => '10.00',
            'user_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);   


        DB::table('dishes')->insert([
            'name' => 'test rest dish 3',
            'price' => '10.00',
            'user_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);   


        DB::table('dishes')->insert([
            'name' => 'test rest dish 4',
            'price' => '10.00',
            'user_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);   


        DB::table('dishes')->insert([
            'name' => 'test rest dish 5',
            'price' => '10.00',
            'user_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);   

        DB::table('dishes')->insert([
            'name' => 'test rest dish 6',
            'price' => '10.00',
            'user_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);   

        DB::table('dishes')->insert([
            'name' => 'test rest dish 7',
            'price' => '10.00',
            'user_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);   

        DB::table('dishes')->insert([
            'name' => 'test rest dish 8',
            'price' => '10.00',
            'user_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);   

        DB::table('dishes')->insert([
            'name' => 'test rest dish 9',
            'price' => '10.00',
            'user_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);   

        DB::table('dishes')->insert([
            'name' => 'test rest dish 10',
            'price' => '10.00',
            'user_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);   
    }
}
