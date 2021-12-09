<?php

namespace Database\Seeders\v1;

use App\Models\v1\Card;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Card::factory(3)->create();
    }
}
