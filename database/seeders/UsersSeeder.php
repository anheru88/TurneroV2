<?php

namespace Database\Seeders;

use App\Models\Role;
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
        $superAdmin = User::create([
            'name' => 'Angel Jimenez Escobar',
            'email' => 'ajimenezescobar@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$4MIcYDKwaSNIDIDwNmBveO2UtmYmDRiaGXIDOdM0PvB9YdljIhqDe',
            'remember_token' => Str::random(10),
        ]);

        $roles = [Role::SUPER_ADMIN];
        $superAdmin->assignRole($roles);

        $admin = User::create([
            'name' => 'Angel Jimenez Escobar',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$4MIcYDKwaSNIDIDwNmBveO2UtmYmDRiaGXIDOdM0PvB9YdljIhqDe',
            'remember_token' => Str::random(10),
        ]);

        $roles = [Role::ADMIN];
        $admin->assignRole($roles);

        $operator = User::create([
            'name' => 'Angel Jimenez Escobar',
            'email' => 'operator1@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$4MIcYDKwaSNIDIDwNmBveO2UtmYmDRiaGXIDOdM0PvB9YdljIhqDe',
            'remember_token' => Str::random(10),
        ]);

        $roles = [Role::OPERATOR];
        $operator->assignRole($roles);
    }
}
