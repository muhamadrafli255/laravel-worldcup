@extends('layouts.main')
@section('content')
    
    <div class="container">
        <h1 class="text-primary mt-2 mb-4">Teams</h1>
        <div class="row">
            @foreach ($teams as $team)
                <div class="col-2 mb-4 text-center">
                    <img src="{{ $team->image }}" height="75px" width="120px" class="border border-primary border-2">
                    <h5>{{ $team->country_name }}</h5>
                    <h5>({{ $team->name }})</h5>
                </div>
            @endforeach
        </div>
    </div>

@endsection