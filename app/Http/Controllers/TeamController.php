<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $title = 'Teams';
        $teams = Team::get();
        return view('contents.teams', compact('title', 'teams'));
    }
}
