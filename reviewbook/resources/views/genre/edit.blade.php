@extends('../layouts.master')
@section('title')
  Genre
@endsection

@section('content-title')
    <h1>Edit Genre</h1>
@endsection

@section('content')
<form action="{{ route('genre.update', $data->id) }}" method="POST">
  @csrf
  @method('PUT')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name Genre</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" value="{{ $data->name }}">
      @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputDes" class="form-label">Description</label>
      <textarea name="description" id="exampleInputDes" cols="30" rows="5" class="form-control">{{ $data->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection