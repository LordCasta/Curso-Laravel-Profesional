<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => 1,
            'name' => 'example',
            'email' => 'email@mail.com',
            'password' => Hash::make('123456')
        ]);

          User::create([
            'id' => 2,
            'name' => 'example2',
            'email' => 'email2@mail.com',
            'password' => Hash::make('123456')

        ]);
    }
}
