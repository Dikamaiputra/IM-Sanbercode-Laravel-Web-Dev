@extends('layouts.master')
@section('title')
	{{-- Hallo, {{ Auth::user()->name }} --}}
@endsection

@section('content-title')
	<h1>SanberBook</h1>
	<h3>Social Media Developer Santai Berkualitas</h3>
	<p>Belajar dan Berbagi agar hidup ini semakin santai berkualitas</p>
@endsection

@section('content')

@if (session('danger'))
    <div class="alert alert-danger">
        {{ session('danger') }}
    </div>
@endif
@guest
	
<h3>Banefit Join SanberBook</h3>
<ul>
	<li>Mendapatkan motivasi dari sesama developer</li>
	<li>Sharing knowledge dari para mastah Sanber</li>
	<li>Dibuat oleh calon web developer terbaik</li>
</ul>

<h3>Cara Bergabung ke Sanberbook</h3>
<ol>
	<li>Mengunjungi Website ini</li>
	<li>Mendaftar di <a href="{{ route('register') }}">Form Sign Up</a></li>
	<li>Selesai!</li>
</ol>
@endguest
@auth
	<div class="container">
        <div class="card shadow about-card">
            <div class="card-body">
                <h1 class="card-title text-primary mb-4">📚 SanberBook</h1>
                <p class="card-text">
                    <strong>SanberBook</strong> adalah platform digital yang dirancang khusus untuk para pecinta buku. Pengguna dapat menemukan berbagai buku dari berbagai genre, membaca ringkasan, serta memberikan ulasan dan penilaian terhadap buku yang telah mereka baca.
                </p>
                <h5 class="mt-4">✨ Fitur Utama</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Menjelajahi koleksi buku berdasarkan genre atau popularitas</li>
                    <li class="list-group-item">Melihat detail dan deskripsi buku</li>
                    <li class="list-group-item">Memberikan review dan rating</li>
                    <li class="list-group-item">Menyimpan daftar buku favorit</li>
                    <li class="list-group-item">Autentikasi pengguna (Login / Register)</li>
                    <li class="list-group-item">Manajemen konten buku dan genre oleh admin</li>
                </ul>
                <p class="mt-4">
                    Website ini dibangun menggunakan <strong>Laravel</strong>, framework PHP modern yang handal dan aman, untuk memberikan pengalaman pengguna yang optimal.
                </p>
            </div>
        </div>
    </div>
@endauth
@endsection
