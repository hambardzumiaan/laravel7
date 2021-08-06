<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "John",
            'email' => "admin@gmail.com",
            'is_admin' => 1,
            'password' => Hash::make("admin"),
        ]);

        DB::table('users')->insert([
            'name' => "awd",
            'email' => "awdawd@awdawd.awd",
            'password' => Hash::make("awdawd"),
        ]);
    }
}
