@extends('layouts.app')

@section('content')

<div class="hero-box mb-4">
    <h1 class="fw-bold">Selamat Datang, {{ $username }}!</h1>
    <p>Temukan berbagai buku pilihan dan rekomendasi terbaik untukmu.</p>
</div>

<h3 class="mb-3">Rekomendasi Buku</h3>

<div class="row">
    <div class="col-md-4 mb-3">
        <div class="card shadow-sm">
            <img src="https://picsum.photos/400/250?random=1" class="card-img-top">
            <div class="card-body">
                <h5>Novel Inspiratif</h5>
                <p class="text-muted">Rp 50.000</p>
                <button class="btn btn-primary w-100">Lihat Detail</button>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card shadow-sm">
            <img src="https://picsum.photos/400/250?random=2" class="card-img-top">
            <div class="card-body">
                <h5>Buku Motivasi</h5>
                <p class="text-muted">Rp 65.000</p>
                <button class="btn btn-primary w-100">Lihat Detail</button>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card shadow-sm">
            <img src="https://picsum.photos/400/250?random=3" class="card-img-top">
            <div class="card-body">
                <h5>Komik Bestseller</h5>
                <p class="text-muted">Rp 40.000</p>
                <button class="btn btn-primary w-100">Lihat Detail</button>
            </div>
        </div>
    </div>
</div>

@endsection
