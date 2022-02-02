<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Game;
use App\Http\Resources\GameResource;

class GameController extends Controller
{
    public function index()
    {
        //metodo senza resource
        // $games = Game::all();
        // return $games;
        return GameResource::collection(Game::all());
    }
}
