<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'One Direction',
            'email' => 'test@mail.jp',
            'email_verified_at' => null,
            'password' => '11111111',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}