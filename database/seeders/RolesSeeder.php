<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']); // Admin with superpowers
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Operator']);
    }
}
