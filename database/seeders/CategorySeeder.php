<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 100; $i++) {
            DB::table('categories')->insert([
                'category_name' => 'Category Number ' . $i,
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ]);
        }
    }
}
