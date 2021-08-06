<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class countries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {

            DB::table('countries')->insert([
                'name' => Str::random(10),
                'capital' => Str::random(10),
                'population' => mt_rand(100000, 2000000000),
                'is_nato' => mt_rand(0,1),
            ]);

        }
    }
}
