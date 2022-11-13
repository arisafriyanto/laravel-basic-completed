<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                "name" => "Aris Afriyanto",
                "email" => "aris@gmail.com",
                "password" => bcrypt("afriyan"),
                "email_verified_at" => Carbon::now(),
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Wafiq Dwi Ana Putri",
                "email" => "wafiq@gmail.com",
                "password" => bcrypt("wafiq"),
                "email_verified_at" => Carbon::now(),
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ])->each(function ($user) {
            DB::table("users")->insert($user);
        });
    }
}
