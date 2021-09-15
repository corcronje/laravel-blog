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
        $seeders = [
            RoleSeeder::class,
            UserSeeder::class,
            TagSeeder::class,
            CategorySeeder::class,
            PostSeeder::class
        ];

        foreach($seeders as $seeder) {
            $this->call($seeder);
        }
    }
}
