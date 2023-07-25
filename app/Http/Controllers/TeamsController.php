<?php

namespace App\Http\Controllers;

use App\Models\Manager;
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

        $managers = Manager::all();
        return view('teams.create')->with("managers", $managers);
    }

    public function saveTeam(Request $request)
    {
        $team = Team::create([
            'name' => $request->input('teamName'),
            'manager_id' => $request->input('manager'),
            'found_date' => $request->input('foundDate'),
            'country' => $request->input('country'),
            'city' => $request->input('city'),
        ]);

        return redirect('/teams');
    }

    public function editTeam($id)
    {

        $team = Team::find($id);
        return view('teams.edit')->with('team', $team);
    }


    public function updateTeam(Request $request, $id)
    {
        // dd($id);
        $team = Team::where('id', $id)
            ->update([
                'name' => $request->input('teamName'),
                'found_date' => $request->input('foundDate'),
                'country' => $request->input('country'),
                'city' => $request->input('city'),
            ]);

        return redirect("/teams");
    }


    public function deleteTeam($id)
    {
        $team = Team::find($id);
        $team->delete();
        return redirect("/teams");
    }


    public function showTeam($id)
    {
        $team = Team::find($id)->loadMissing(["players", "manager"]);
        // dd($team);
        return view("teams.show")->with('team', $team);
    }
}
