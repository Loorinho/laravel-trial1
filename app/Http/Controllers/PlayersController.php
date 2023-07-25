<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
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
        $player = Player::find($id)->load("team");

        return view('players.show', ['player' => $player]);
    }

    public function createPlayer()
    {
        $teams = Team::all();
        return view('players.create')->with("teams", $teams);
    }

    public function SavePlayer(Request $request)
    {
        // dd($request);
        $player = Player::create([
            'name' => $request->input('playerName'),
            // 'team' => $request->input("team"),
            'age' => $request->input('age'),
            'club' => $request->input('club'),
            'shirt_number' => $request->input('shirtNumber'),
        ]);

        return redirect('/players');
    }
}
