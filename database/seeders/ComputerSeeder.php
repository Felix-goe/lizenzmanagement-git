<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Computer;

class ComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate 50 random computers
        Computer::factory()->count(50)->create();
    }
}

