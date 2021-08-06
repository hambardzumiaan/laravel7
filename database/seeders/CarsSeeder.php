<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {

            DB::table('cars')->insert([
                'name' => Str::random(10),
                'model' => Str::random(5),
                'power' => mt_rand(100, 400),
                'km' => mt_rand(50000, 150000),
                'price' => mt_rand(3000, 15000),
                'year' => mt_rand(1990, 2021),
            ]);

        }
    }
}
