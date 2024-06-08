@extends('layouts.main')
@push('css')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>Selamat Datang {{Auth::user()->nama}}</h1>
                <p>Anda adalah orang yang luar biasa dengan pandangan hidup yang indah. Persahabatan Anda selalu merupakan kesempatan untuk belajar. Kami menyambut Anda dengan hangat untuk bergabung dengan kami!</p>
            </div>
    </div>
@endsection