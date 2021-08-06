<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'user_id' => "1",
            'description' => Str::random(20),
        ]);

         DB::table('posts')->insert([
            'user_id' => "2",
            'description' => Str::random(20),
        ]);
    }
}
