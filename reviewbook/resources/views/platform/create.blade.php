@extends('../layouts.master')
@section('title')
  Platform
@endsection

@section('content-title')
    <h1>Create New Platform</h1>
@endsection

@section('content')
<form action="{{ route('platform.store') }}" method="POST">
  @csrf
    <div class="mb-3">
      <label for="exampleInput" class="form-label">Name Platform</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInput" name="name" aria-describedby="emailHelp">
      @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputDes" class="form-label">Description</label>
      <textarea name="description" id="exampleInputDes" cols="30" rows="5" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection