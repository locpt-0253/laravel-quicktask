<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::unguard();

        User::create([
            'first_name' => 'Loc',
            'last_name' => 'Pham',
            'email' => 'admin@gmail.com',
            'username' => 'frankschifflotte',
            'password' => Hash::make('123456789'),
            'is_active' => true,
            'is_admin' => true,
        ]);
    }
}
