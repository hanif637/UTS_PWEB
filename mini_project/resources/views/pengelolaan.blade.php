@extends('layouts.app')

@section('content')
<h2 class="fw-semibold mb-4">Katalog Buku</h2>

<div class="row">
    @foreach($items as $item)
    <div class="col-md-4 mb-3">
        <div class="card shadow-sm">
            <img src="https://picsum.photos/400/250?random={{ $loop->index + 10 }}" class="card-img-top">
            <div class="card-body">
                <h5 class="fw-bold">{{ $item['nama'] }}</h5>
                <p class="text-muted">Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
                <button class="btn btn-outline-primary w-100">Detail Buku</button>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
