<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class WorldcupController extends Controller
{
    public function getTeams(Request $request)
    {
        $data = \App\Models\Team::getTeams($request->query());
        return DataTables::of($data)->make(true);
    }

    public function getFixtures(Request $request)
    {
        $data = \App\Models\Fixture::getFixtures($request->query());
        return DataTables::of($data)->make(true);
    }

    public function getScores(Request $request)
    {
        $data = \App\Models\Score::getScores($request->query());
        return DataTables::of($data)->make(true);
    }

    public function getBlogPost(Request $request)
    {
        $data = \App\Models\Blog::getBlogPost($request->query());
        return DataTables::of($data)->make(true);
    }
}
