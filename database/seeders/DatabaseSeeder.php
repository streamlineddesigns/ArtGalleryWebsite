<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(ColorTableSeeder::class);
        $this->command->info('Color table seeded!');
        $this->call(UserTableSeeder::class);
        $this->command->info('User table seeded!');
    }
}
