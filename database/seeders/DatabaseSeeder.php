<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // dico quali seeder lanciare uan volta in funzione per poterne lanciare più di uno alla volta in un colpo solo
        $this->call([
            CategorySeeder::class,
            EdibleSeeder::class,
            UnedibleSeeder::class,
        ]);
    }
}
