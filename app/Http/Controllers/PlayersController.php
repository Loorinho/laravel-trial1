<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function listPlayers(Request $req)
    {
        $players = Player::all();
        return view('players.index', ['players' => $players]);
    }

    public function showPlayer($id)
    {
        $player = Player::find($id);
        return view('players.show', ['player' => $player]);
    }

    public function createPlayer()
    {
        return view('players.create');
    }

    public function SavePlayer(Request $request)
    {
        // dd($request);
        $player = Player::create([
            'name' => $request->input('playerName'),
            'age' => $request->input('age'),
            'club' => $request->input('club'),
            'shirt_number' => $request->input('shirtNumber'),
        ]);

        return redirect('/players');
    }
}
