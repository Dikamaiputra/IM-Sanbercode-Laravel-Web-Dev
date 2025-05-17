@extends('../layouts.master')
@section('title')
    Profile
@endsection

@section('content-title')
    <h1>Profile {{ Auth::user()->role }}</h1>
@endsection

@section('content')

    @if (session()->has('sukses'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('sukses') }}
        </div>        
    @endif
    
    <div class="container mt-4">
    <div class="card mx-auto" style="max-width: 500px;">
        <div class="card-body text-center">
            {{-- Gambar profil --}}
            <img src="{{ asset('uploads/user.png') }}" 
                 alt="Profile Picture" 
                 class="rounded-circle mb-3" 
                 width="120" height="120" 
                 style="object-fit: cover;">

            <h4>{{ Auth::user()->name }}</h4>
            <p class="text-muted mb-1">{{ Auth::user()->email }}</p>
            <p class="text-muted">Role: <strong>{{ Auth::user()->role }}</strong></p>

            <a href="{{ route('profile.edit') }}" class="btn btn-outline-primary mt-3">Edit Profile</a>
        </div>
    </div>
</div>
@endsection