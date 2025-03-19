<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Misono Mika',
            'username' => 'mikaxd',
            'email' => 'misonomika@trinity.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'name' => 'Onikata Kayoko',
            'username' => 'kayoko13',
            'email' => 'kayoko@gehenna@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'name' => 'Ryuuge Kisaki',
            'username' => 'kiki99',
            'email' => 'kisaki@shanhaijing@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'name' => 'Ushio Noa',
            'username' => 'noachan',
            'email' => 'noa@millenium@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'name' => 'Hayase Yuuka',
            'username' => 'yuuka100kg',
            'email' => 'yuuka@millenium.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
    }
}
