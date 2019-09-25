<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'test rest dish 1',
            'price' => '10.00',
            'user_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);   
        
        DB::table('products')->insert([
            'name' => 'test rest dish 2',
            'price' => '10.00',
            'user_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
