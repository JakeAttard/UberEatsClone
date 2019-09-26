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
        // Burger King Products
        DB::table('products')->insert([
            'name' => 'Bacon King Pretzel',
            'price' => '10.00',
            'user_id' => 4,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);   
        
        DB::table('products')->insert([
            'name' => 'Chicken Caesar Sandwiches',
            'price' => '12.00',
            'user_id' => 4,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('products')->insert([
            'name' => 'Maple Waffle Sanwiches',
            'price' => '6.00',
            'user_id' => 4,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('products')->insert([
            'name' => 'Crispy Taco',
            'price' => '15.00',
            'user_id' => 4,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('products')->insert([
            'name' => 'Mozzarella Sticks',
            'price' => '4.00',
            'user_id' => 4,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]); 

        DB::table('products')->insert([
            'name' => 'Stacker King',
            'price' => '16.00',
            'user_id' => 4,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]); 

        // Hungry Jacks Products
        DB::table('products')->insert([
            'name' => 'Whopper',
            'price' => '12.00',
            'user_id' => 5,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('products')->insert([
            'name' => 'Beef Burgers',
            'price' => '16.00',
            'user_id' => 5,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]); 

        DB::table('products')->insert([
            'name' => 'Grill Masters',
            'price' => '10.00',
            'user_id' => 5,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('products')->insert([
            'name' => 'Chicken Burgers',
            'price' => '12.00',
            'user_id' => 5,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('products')->insert([
            'name' => 'Wraps',
            'price' => '12.00',
            'user_id' => 5,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('products')->insert([
            'name' => 'Breakfast',
            'price' => '8.00',
            'user_id' => 5,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('products')->insert([
            'name' => 'Penny Pinchers',
            'price' => '2.00',
            'user_id' => 5,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        // McDonalds Products
        DB::table('products')->insert([
            'name' => 'Chesseburger',
            'price' => '5.00',
            'user_id' => 6,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('products')->insert([
            'name' => 'Double Cheeseburger',
            'price' => '10.00',
            'user_id' => 6,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('products')->insert([
            'name' => 'Hamburger',
            'price' => '4.00',
            'user_id' => 6,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]); 

        // KFC Products
        DB::table('products')->insert([
            'name' => 'Zinger Stacker Combo',
            'price' => '18.00',
            'user_id' => 7,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('products')->insert([
            'name' => 'Double Tender Burger',
            'price' => '15.00',
            'user_id' => 7,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('products')->insert([
            'name' => 'Orginal Fillet Burger',
            'price' => '12.00',
            'user_id' => 7,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('products')->insert([
            'name' => 'Zinger Burger',
            'price' => '10.00',
            'user_id' => 7,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('products')->insert([
            'name' => 'Kentucky Burger',
            'price' => '13.00',
            'user_id' => 7,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        // Subway Products
        DB::table('products')->insert([
            'name' => 'Mediterranean Chicken',
            'price' => '8.00',
            'user_id' => 9,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('products')->insert([
            'name' => 'Buffalo Chicken',
            'price' => '6.00',
            'user_id' => 9,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('products')->insert([
            'name' => 'Chicken Classic',
            'price' => '5.00',
            'user_id' => 9,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('products')->insert([
            'name' => 'Chicken Strips',
            'price' => '10.00',
            'user_id' => 9,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('products')->insert([
            'name' => 'Steak Melt',
            'price' => '9.00',
            'user_id' => 9,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('products')->insert([
            'name' => 'Roast Beef',
            'price' => '12.00',
            'user_id' => 9,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        // Deep South Chicken Products
        DB::table('products')->insert([
            'name' => 'Boneless Quarter',
            'price' => '11.95',
            'user_id' => 10,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('products')->insert([
            'name' => 'Bonless Half',
            'price' => '14.95',
            'user_id' => 10,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        // Zambrero Oxenford
        DB::table('products')->insert([
            'name' => 'Classic Burrito',
            'price' => '16.00',
            'user_id' => 11,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
