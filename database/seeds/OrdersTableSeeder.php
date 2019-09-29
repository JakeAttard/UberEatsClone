<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'user_id' => '2',
            'product_id' => '9',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('orders')->insert([
            'user_id' => '3',
            'product_id' => '11',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('orders')->insert([
            'user_id' => '17',
            'product_id' => '13',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('orders')->insert([
            'user_id' => '18',
            'product_id' => '15',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
