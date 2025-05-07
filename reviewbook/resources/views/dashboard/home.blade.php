@extends('layouts.master')
@section('title')
	HOME
@endsection

@section('content-title')
	<h1>SanberBook</h1>
	<h3>Social Media Developer Santai Berkualitas</h3>
	<p>Belajar dan Berbagi agar hidup ini semakin santai berkualitas</p>
@endsection

@section('content')
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
@endsection
