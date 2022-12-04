@extends('layouts.main')
@section('content')
    
    <div class="container">
        <h1 class="text-primary mt-2 mb-4">Scores</h1>
        <div class="row">
            @foreach ($scores as $score)
                <h2>{{ Carbon\Carbon::parse($score->Fixture->time)->format('d M Y') }}</h2>
                <div class="container">
                    <div class="card mb-5">
                        <div class="row m-4">
                            <div class="col-4">
                                <h6>{{ $score->Fixture->group_name }}</h6>
                            </div>
                            <div class="col-1">
                                <h6>{{ $score->Fixture->HomeTeam->country_name }}</h6>
                            </div>
                            <div class="col-1">
                                <img class="border border-primary border-2 " src="{{ $score->Fixture->HomeTeam->image }}" height="25px" width="40px">
                            </div>
                            <div class="col-1">
                                <h6>{{ $score->home }}</h6>
                            </div>
                            <div class="col-1">
                                <h6>:</h6>
                            </div>
                            <div class="col-1">
                                <h6>{{ $score->away }}</h6>
                            </div>
                            <div class="col-1">
                                <img class="border border-primary border-2" src="{{ $score->Fixture->AwayTeam->image }}" height="25px" width="40px">
                            </div>
                            <div class="col-2">
                                <h6>{{ $score->Fixture->AwayTeam->country_name }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection