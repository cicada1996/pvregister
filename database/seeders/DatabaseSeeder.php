<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Plant;
use App\Models\Investor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $testUser = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            ]);

        $plants = Plant::factory()
        ->count(5)
        ->for($testUser)
        ->create();

        $investors = Investor::factory()
        ->count(5)
        ->for($testUser)
        ->create();

        foreach ($investors as $investor) {
            $investor->plants()->attach($plants->random()->id, ['percentage' => 12.50]);
        }

        $adminUser = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'is_admin' => true,
        ]);
    }
}
