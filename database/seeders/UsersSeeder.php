<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Angel Jimenez Escobar',
            'email' => 'ajimenezescobar@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$4MIcYDKwaSNIDIDwNmBveO2UtmYmDRiaGXIDOdM0PvB9YdljIhqDe',
            'remember_token' => Str::random(10),
        ]);

        $roles = ['Super Admin'];
        $admin->assignRole($roles);

        $operator = User::create([
            'name' => 'Angel Jimenez Escobar',
            'email' => 'operator1@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$4MIcYDKwaSNIDIDwNmBveO2UtmYmDRiaGXIDOdM0PvB9YdljIhqDe',
            'remember_token' => Str::random(10),
        ]);

        $roles = ['Operator'];
        $operator->assignRole($roles);
    }
}
