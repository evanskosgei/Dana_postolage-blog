<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fullname' => 'Dana',
            'email' => 'Dana@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('Dana@123'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        User::create([
            'fullname' => 'Dennis',
            'email' => 'Dennis@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('Dennis@123'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
