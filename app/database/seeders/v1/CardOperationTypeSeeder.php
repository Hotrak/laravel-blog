<?php

namespace Database\Seeders\v1;

use App\Models\v1\CardOperationType;
use Illuminate\Database\Seeder;

class CardOperationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        CardOperationType::factory()
            ->state([ 'name' => 'Транспорт'])
            ->create();

        CardOperationType::factory()
            ->state([ 'name' => 'Магазин'])
            ->create();

        CardOperationType::factory()
            ->state([ 'name' => 'Еда'])
            ->hasParent(1, ['name' => 'Магазин'])
            ->create();

        CardOperationType::factory()
            ->state([ 'name' => 'Алеся'])
            ->hasParent(1, ['name' => 'Еда'])
            ->create();

        CardOperationType::factory()
            ->state([ 'name' => 'Продукты'])
            ->hasParent(1, ['name' => 'Еда'])
            ->create();

        CardOperationType::factory()
            ->state([ 'name' => 'Доставка'])
            ->hasParent(1, ['name' => 'Еда'])
            ->create();

    }
}
