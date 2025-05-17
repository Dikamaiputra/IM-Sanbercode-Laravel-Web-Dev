@extends('../layouts.master')
@section('title')
  PROFILE
@endsection

@section('content-title')
    <h1>Edit Profile</h1>
@endsection

@section('content')
@if (session()->has('msg'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('msg') }}
        </div>        
    @endif
<form action="{{ $profile ? route('profile.update') : route('profile.store') }}" method="POST">
  @csrf
        @if($profile)
            @method('PUT')
        @endif
    <div class="mb-3">
      <label for="exampleInputName" class="form-label">Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" name="name" value="{{ old('name', auth()->user()->name) }}">
      @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputAge" class="form-label">Age</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputAge" name="age" value="{{ old('age', $profile->age ?? '') }}">
      @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputAddress" class="form-label">Address</label>
      <input type="text" class="form-control @error('address') is-invalid @enderror" id="exampleInputAddress" name="address" value="{{ old('address', $profile->address ?? '') }}">
    </div>
    <button type="submit" class="btn btn-primary">
            {{ $profile ? 'Update Profile' : 'Create Profile' }}
    </button>
  </form>
@endsection