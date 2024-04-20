<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Service;
use Illuminate\Database\Seeder;

class TestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::factory()->count(10)->create();
        Module::factory()->count(10)->create();
    }
}
