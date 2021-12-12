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
        $types = [
            (object) [
                'name' => 'Транспорт',
            ],
            (object) [
                'name' => 'Покушать',
            ],
            (object) [
                'name' => 'Алеся',
                'parentTypeName' => 'Покушать'
            ],
            (object) [
                'name' => 'Доставка',
                'parentTypeName' => 'Покушать'
            ],
            (object) [
                'name' => 'Продукты',
                'parentTypeName' => 'Покушать'
            ],
            (object) [
                'name' => 'Ценные покупки',
            ],
        ];

        foreach($types as $type){
            $state = ['name' => $type->name];

            if(isset($type->parentTypeName))
                $state['parent_type_id'] =  CardOperationType::where('name', '=', $type->parentTypeName)->first();

            CardOperationType::factory()
                ->state($state)
                ->create();
        }

        // CardOperationType::factory()
        //     ->state([ 'name' => 'Транспорт'])
        //     ->create();

        // CardOperationType::factory()
        //     ->state([ 'name' => 'Магазин'])
        //     ->create();



        // CardOperationType::factory()
        //     ->state(['name' => 'Еда',])
        //     ->create();

        // CardOperationType::factory()
        //     ->state([
        //         'name' => 'Доставка',
        //         'parent_type_id' => CardOperationType::where('name', '=', 'Еда')->first(),
        //     ])
        //     ->create();
        // CardOperationType::factory()
        //     ->state([
        //         'name' => 'Доставка',
        //         'parent_type_id' => CardOperationType::where('name', '=', 'Еда')->first(),
        //     ])
        //     ->create();


    }
}
