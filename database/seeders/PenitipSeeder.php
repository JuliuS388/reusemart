<?php

namespace Database\Seeders;

use App\Models\Penitip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenitipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Penitip::factory()->count(10)->create();
    }
}
