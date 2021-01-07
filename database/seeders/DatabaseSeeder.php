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
        // \App\Models\Menu::factory()->create();
        $this->call([
            UserSeeder::class,
            MenuSeeder::class,
            TypeArtikelSeeder::class,
            ArtikelTypeArtikelSeeder::class,
            ArtikelSeeder::class,
            GalerySeeder::class,
        ]);
    }
}
