<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Job;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a specific user
        User::factory()->create([
            'first_name' => 'posh',
            'last_name' => 'Paulo',
            'email' => 'test@example.com',
        ]);

        // Create 200 jobs
        Job::factory(200)->create();
    }
}
