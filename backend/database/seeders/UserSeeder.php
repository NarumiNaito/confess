<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            [
                'name'              => 'test',
                'email'             => 'test@test.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('password123'),
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'name'              => 'naito',
                'email'             => 'naito@naito.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('password123'),
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
        ]);
    }
}
