@extends('layouts.main')
@section('content')
    
    <div class="container">
        <h1 class="text-primary mt-2 mb-4">Fixtures</h1>
        <div class="row">
            @foreach ($fixtures as $fixture)
                <h2>{{ Carbon\Carbon::parse($fixture->time)->format('d M Y') }}</h2>
                <div class="container">
                    <div class="card mb-5">
                        <div class="row m-4">
                            <div class="col-4">
                                <h6>{{ $fixture->group_name }}</h6>
                            </div>
                            <div class="col-1">
                                <h6>{{ $fixture->HomeTeam->country_name }}</h6>
                            </div>
                            <div class="col-1">
                                <img class="border border-primary border-2 " src="{{ $fixture->HomeTeam->image }}" height="25px" width="40px">
                            </div>
                            <div class="col-1">
                                <h6>VS</h6>
                            </div>
                            <div class="col-1">
                                <img class="border border-primary border-2" src="{{ $fixture->AwayTeam->image }}" height="25px" width="40px">
                            </div>
                            <div class="col-2">
                                <h6>{{ $fixture->AwayTeam->country_name }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection