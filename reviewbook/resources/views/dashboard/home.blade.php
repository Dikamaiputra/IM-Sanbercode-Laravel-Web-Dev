@extends('layouts.master')
@section('title')
Hallo, {{ Auth::user()->name ?? '' }}
@endsection

@section('content-title')
<h1>SanberBook</h1>
<h3>Social Media Developer Santai Berkualitas</h3>
<p>Belajar dan Berbagi agar hidup ini semakin santai berkualitas</p>
@endsection

@section('content')
<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($data as $buku)
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('uploads/'.$buku->image) }}" class="img-fluid mt-3" style="height: 200px;">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><strong>{{ $buku->title }}</strong></h5>
                        <p class="card-text">{{ Str::limit($buku->summary ?? '', 100) }}</p>
                        <p class="card-text"><small class="text-body-secondary">{{ $buku->created_at }}</small></p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection