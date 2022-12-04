<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function index()
    {
        $title = 'Scores';
        $scores = Score::get();
        return view('contents.scores', compact('title', 'scores'));
    }
}
