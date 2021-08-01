<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 100; $i++) {
            DB::table('posts')->insert([
                'title' => 'Post ' . $i,
                'author' => 'Admin',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad architecto cum delectus dicta dignissimos dolores ex, exercitationem explicabo hic incidunt ipsum, iusto pariatur provident repudiandae rerum tempore voluptatem voluptates?
',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ]);

        }
    }
}
