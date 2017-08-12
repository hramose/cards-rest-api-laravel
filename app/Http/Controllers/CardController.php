<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;

class CardController extends Controller
{
    public function index()
    {
    	return Card::all();
    }

    public function show(Card $card)
    {
    	return $card;
    }

    public function store(Request $request)
    {
    	Card::create($request->all());
    }

    public function update(Card $card, Request $request)
    {
    	$card->update($request->all());
    }

    public function destroy(Card $card)
    {
    	$card->delete();
    }
}
