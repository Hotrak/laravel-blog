<?php

namespace Database\Seeders\v1;

use App\Models\v1\Card;
use App\Models\v1\CurrencyType;
use Illuminate\Database\Seeder;

class CurrencyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['USD', 'BYN', 'EUR'];

        foreach($types as $type){
            CurrencyType::create(['name' => $type]);
        }
    }
}
