<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function index(Request $req)
    {
        // $players = Player::all();
        //$players = ["Paul muchurezi", "Nelson Ssenkatuuko"];
        $players = [
            'player1' => 'Marcus rashford',
            'player2' => 'Mason Greenwood'
        ];
        // return view('welcome')->with('players', $players);
        return view('players.index', ['players' => $players]);
    }

    public function show($id)
    {
        // $players = Player::all();
        //$players = ["Paul muchurezi", "Nelson Ssenkatuuko"];
        $player = 'This is a player with id ' . $id;
        // return view('welcome')->with('players', $players);
        return view('players.show', ['player' => $player]);
    }

    public function create(Request $req)
    {
        return "Creating page";
    }
}
