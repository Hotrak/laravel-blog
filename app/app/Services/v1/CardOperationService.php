<?php

namespace App\Services\v1;

use App\Models\v1\CardOperation;

class CardOperationService
{
    public function find($id) : CardOperation
    {
        return CardOperation::find($id);
    }

    public function getAll()
    {
       return CardOperation::all();
    }

    public function store(array $attributes) : CardOperation
    {
        $model = CardOperation::create($attributes);

        return $model;
    }

    public function update(CardOperation $model, array $attributes) : CardOperation
    {
        $model->update($attributes);

        return $model;
    }

    public function delete(CardOperation $model)
    {
        $model->delete();
    }


}
