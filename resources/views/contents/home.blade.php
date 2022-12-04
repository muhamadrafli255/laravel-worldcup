@extends('layouts.main')
@section('content')
    
<section class="container" style="margin-top: 180px">
    <div class="row">
        <div class="col-12 col-lg-6">
    <h3>Selamat Datang Di <a class="text-primary text-decoration-none">JoySport</a></h3>
    <h6><span class="text-primary">JoySport</span> adalah website untuk melihat score</br>
        hasil pertandingan <span class="text-primary">FIFA WorldCup Qatar 2022</span></h6>
        <a href="/scores" class="btn btn-primary">Lihat Score</a>
        </div>
        <div class="col-12 col-lg-6" style="margin-top: -120px">
            <img src="/images/hero.png" height="400px" width="650px">
        </div>
    </div>
</section>

@endsection