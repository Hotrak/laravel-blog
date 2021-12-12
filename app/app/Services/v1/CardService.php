<?php

namespace App\Services\v1;

use App\Models\v1\Card;

class CardService
{
    public function find($id) : Card
    {
        return Card::find($id);
    }

    public function getAll()
    {
       return Card::all();
    }

    public function store(array $attributes) : Card
    {
        $model = Card::create($attributes);

        return $model;
    }

    public function update(Card $model, array $attributes) : Card
    {
        $model->update($attributes);

        return $model;
    }

    public function delete(Card $model)
    {
        $model->delete();
    }


}
