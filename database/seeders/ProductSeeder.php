<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 200; $i++) {
            DB::table('products')->insert([
                'name' => 'Product ' . $i,
                'price' => rand(100000,300000),
                'quantity' => rand(1,100),
                'category_id' => rand(7,100),
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam beatae blanditiis cumque debitis ea earum eius eveniet, harum ipsam magnam minus nemo numquam obcaecati officiis placeat quos totam ullam voluptas!',
                'created_at' => NOW(),
                'updated_at' => NOW()
            ]);
        }
    }
}
