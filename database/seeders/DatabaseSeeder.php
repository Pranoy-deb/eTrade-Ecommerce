<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::create([
        //     'name' => 'Deb',
        //     'email' => 'deb@gmail.com',
        //     'password' => Hash::make('password')
        // ]);

        Customer::create([
            'name' => 'Deb',
            'email' => 'deb464@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
