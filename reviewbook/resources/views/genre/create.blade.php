@extends('../layouts.master')
@section('title')
  Genre
@endsection

@section('content-title')
    <h1>Create New Genre</h1>
@endsection

@section('content')
<form action="{{ route('genre.store') }}" method="POST">
  @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name Genre</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">
      @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputDes" class="form-label">Description</label>
      <textarea name="description" id="exampleInputDes" cols="30" rows="5" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection