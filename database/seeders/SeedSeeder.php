<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SeedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Seed::factory()->count(30)->create();
    }
}
