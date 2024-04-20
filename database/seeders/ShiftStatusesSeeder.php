<?php

namespace Database\Seeders;

use App\Models\ShiftStatus;
use Illuminate\Database\Seeder;

class ShiftStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ShiftStatus::create(['name' => 'Waiting']);
        ShiftStatus::create(['name' => 'In Call']);
        ShiftStatus::create(['name' => 'In Progress']);
        ShiftStatus::create(['name' => 'Done']);
    }
}
