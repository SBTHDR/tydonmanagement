<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::create([
            'name' => 'kimberley Lamb',
            'email' => 'kimberleylamb@mailinator.com',
            'role' => 'admin',
            'password' => Hash::make('Pa$$w0rd!'),
        ]);
    }
}
