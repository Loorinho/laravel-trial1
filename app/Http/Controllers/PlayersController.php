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
        // $players = Player::all();
        //$players = ["Paul muchurezi", "Nelson Ssenkatuuko"];
        $player = 'This is a player with id ' . $id;
        // return view('welcome')->with('players', $players);
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
