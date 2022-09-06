<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //them du lieu vao bang user
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'codelean',
                'email' => 'codelean123@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' =>null,
                'level' => 0,
                'description' => null
            ],
            [
                'id' => 2,
                'name' => 'Admin',
                'email' => 'admin226599@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' =>null,
                'level' => 0,
                'description' => null
            ],
        ]);

        /*DB::table('blogs')->insert([
            [
                'id' => 1,
                'brand_is' => 1,
                'product_category_id' => 2,
                'name' => 'Pure Pineapple',
                'description' => 'lerom ipsum',
                'content' => '',
                'price' => 625.99,
                'qty' =>20,
                'discount' => 436,
                'weight' => 1.5,
                'skv' => '00113',
                'feature' => true,
                'tag' => 'clothing'
            ],
            [
                'id' => 2,
                'brand_is' => 2,
                'product_category_id' => 2,
                'name' => 'Mina GO',
                'description' => null,
                'content' => null,
                'price' => 36.99,
                'qty' =>20,
                'discount' => 13,
                'weight' => null,
                'skv' => null,
                'feature' => true,
                'tag' => 'clothing'
            ],
        ]);

        DB::table('brands')->insert([
            [
                'id' => 1,
                'brand_is' => 1,
                'product_category_id' => 2,
                'name' => 'Pure Pineapple',
                'description' => 'lerom ipsum',
                'content' => '',
                'price' => 625.99,
                'qty' =>20,
                'discount' => 436,
                'weight' => 1.5,
                'skv' => '00113',
                'feature' => true,
                'tag' => 'clothing'
            ],
            [
                'id' => 2,
                'brand_is' => 2,
                'product_category_id' => 2,
                'name' => 'Mina GO',
                'description' => null,
                'content' => null,
                'price' => 36.99,
                'qty' =>20,
                'discount' => 13,
                'weight' => null,
                'skv' => null,
                'feature' => true,
                'tag' => 'clothing'
            ],
        ]);

        DB::table('product_categories')->insert([
            [
                'id' => 1,
                'brand_is' => 1,
                'product_category_id' => 2,
                'name' => 'Pure Pineapple',
                'description' => 'lerom ipsum',
                'content' => '',
                'price' => 625.99,
                'qty' =>20,
                'discount' => 436,
                'weight' => 1.5,
                'skv' => '00113',
                'feature' => true,
                'tag' => 'clothing'
            ],
            [
                'id' => 2,
                'brand_is' => 2,
                'product_category_id' => 2,
                'name' => 'Mina GO',
                'description' => null,
                'content' => null,
                'price' => 36.99,
                'qty' =>20,
                'discount' => 13,
                'weight' => null,
                'skv' => null,
                'feature' => true,
                'tag' => 'clothing'
            ],
        ]);*/

        DB::table('products')->insert([
            [
                'id' => 1,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'Pure Pineapple',
                'description' => 'lerom ipsum',
                'content' => '',
                'price' => 625.99,
                'qty' =>20,
                'discount' => 436
//                'weight' => 1.5,
//                'skv' => '00113',
//                'feature' => true,
//                'tag' => 'clothing'
            ],
            [
                'id' => 2,
                'brand_id' => 2,
                'product_category_id' => 2,
                'name' => 'Mina GO',
                'description' => null,
                'content' => null,
                'price' => 36.99,
                'qty' =>20,
                'discount' => 13
//                'weight' => null,
//                'skv' => null,
//                'feature' => true,
//                'tag' => 'clothing'
            ],
        ]);

        DB::table('product_comments')->insert([
            [
                'id' => 1,
                'product_id' => 1,
                'user_id' => 4,
                'email '=> 'brandonKenney@gmail.com',
                'name' => 'BradonKenney',
                'message' => 'Nice',
                'rating' => 4
            ],
            [
                'id' => 2,
                'product_id' => 2,
                'user_id' => 5,
                'email '=> 'RoyBanks556@gmail.com',
                'name' => 'Roy Banks',
                'message' => 'Nice',
                'rating' => 4
            ],
        ]);

    }
}
