<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\CardRequest;
use App\Http\Resources\v1\CardResource;
use App\Models\v1\Card;
use Illuminate\Http\Request;
use App\Services\v1\CardService;

class CardController extends Controller
{
    private $service;

    public function __construct(CardService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return CardResource::collection($this->service->getAll());
    }

    public function show(Card $card){
        return new CardResource($card);
    }

    public function store(CardRequest $request)
    {
        return new CardResource($this->service->store($request->validated()));
    }

    public function update(CardRequest $request, Card $card)
    {
        return new CardResource($this->service->update($card, $request->validated()));
    }

    public function destroy(Card $card)
    {
        $this->service->delete($card);

        return response()->noContent();
    }
}
