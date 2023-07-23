<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{

    public function listManagers(Request $req)
    {
        $managers = Manager::all()->load('team');

        // $managers = [[
        //     "id" => "1",
        //     "first_name" => "Loor",
        //     "last_name" => "Jacobson",
        //     "email" => "test@gmail.com",
        // ]];
        return view('managers.index', ['managers' => $managers]);
    }
}
