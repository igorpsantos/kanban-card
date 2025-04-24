<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Project::factory()->create([
            'name' => 'Test Project 1',
            'description' => 'Test Description 1',
            'status_id' => 1,
            'user_id' => 1,
        ]);

        Project::factory()->create([
            'name' => 'Test Project 2',
            'description' => 'Test Description 2',
            'status_id' => 2,
            'user_id' => 1,
        ]); 

        Project::factory()->create([
            'name' => 'Test Project 3',
            'description' => 'Test Description 3',
            'status_id' => 3,
            'user_id' => 1,
        ]);
    }
}
