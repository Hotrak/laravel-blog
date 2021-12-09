<?php

namespace Database\Factories\v1;

use App\Models\User;
use App\Models\v1\Card;
use App\Models\v1\CurrencyType;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Card::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->numerify('card-#####'),
            'balance' => $this->faker->randomFloat(2, 0, 5000),
            'user_id' => User::first()->id,
            'currency_type_id' => CurrencyType::all()->random(),
        ];
    }
}
