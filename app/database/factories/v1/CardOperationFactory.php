<?php

namespace Database\Factories\v1;

use App\Models\v1\Card;
use App\Models\v1\CardOperation;
use App\Models\v1\CardOperationType;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardOperationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CardOperation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'card_id' => Card::all()->random(),
            'type_id' => CardOperationType::all()->random(),
            'sum' => $this->faker->randomFloat(2, 0, 100),
        ];
    }
}
