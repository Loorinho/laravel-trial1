<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function listTeams()
    {
        $teams = Team::all();
        return view('teams.index', ['teams' => $teams]);
    }
}
