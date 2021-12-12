<?php

namespace Database\Seeders;

use Database\Seeders\v1\CardOperationSeeder;
use Database\Seeders\v1\CardOperationTypeSeeder;
use Database\Seeders\v1\CardSeeder;
use Database\Seeders\v1\CurrencyTypeSeeder;
use Database\Seeders\v1\UserSeeder;
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
        $this->call([
            UserSeeder::class,
            CurrencyTypeSeeder::class,
            CardSeeder::class,
            CardOperationTypeSeeder::class,
            CardOperationSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
