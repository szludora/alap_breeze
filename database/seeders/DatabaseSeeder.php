<?php

namespace Database\Seeders;

use App\Models\Ingatlan;
use App\Models\Kategoria;
use App\Models\User;
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
        User::factory(10)->create();
        Kategoria::factory(10)->create();
        Ingatlan::factory(10)->create();
    }
}
