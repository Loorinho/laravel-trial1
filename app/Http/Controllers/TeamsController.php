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
    public function createTeam()
    {

        return view('teams.create');
    }

    public function saveTeam(Request $request)
    {
        $team = Team::create([
            'name' => $request->input('teamName'),
            'found_date' => $request->input('foundDate'),
            'country' => $request->input('country'),
            'city' => $request->input('city'),
        ]);

        return redirect('/teams');
    }
}
