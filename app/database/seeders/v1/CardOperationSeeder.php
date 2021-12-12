<?php

namespace Database\Seeders\v1;

use App\Models\v1\CardOperation;
use Illuminate\Database\Seeder;

class CardOperationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CardOperation::factory()->count(20)->create();
    }
}
