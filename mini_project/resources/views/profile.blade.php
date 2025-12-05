@extends('layouts.app')

@section('content')

<div class="card shadow-sm p-4">
    <h3 class="fw-bold">Profil Pengguna</h3>
    <p class="mt-2">Username: <strong>{{ $username }}</strong></p>
</div>

@endsection
