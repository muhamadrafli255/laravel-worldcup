<?php

namespace App\Http\Controllers;

use App\Models\Fixture;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FixtureController extends Controller
{
    public function index()
    {
        $title = 'Fixtures';
        $fixtures = Fixture::get();
        return view('contents.fixtures', compact('title', 'fixtures'));
    }
}
