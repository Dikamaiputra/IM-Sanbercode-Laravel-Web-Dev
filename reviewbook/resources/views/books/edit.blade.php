@extends('../layouts.master')
@section('title')
  BOOKS
@endsection

@section('content-title')
    <h1>Edit Books</h1>
@endsection

@section('content')
<form action="{{ route('books.update', $data->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
    <div class="mb-3">
      <label for="exampleInputTitle" class="form-label">Title Books</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="exampleInputTitle" name="title"  value="{{ $data->title }}">
      @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputSummary" class="form-label">Summary</label>
      <textarea name="summary" id="summary" cols="30" rows="10" class="form-control @error('summary') is-invalid @enderror" >{{ $data->summary }}</textarea>
      @error('summary')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputStock" class="form-label">Stock</label>
      <input type="text" class="form-control @error('stock') is-invalid @enderror" id="exampleInputStock" name="stock"  value="{{ $data->stock }}">
      @error('stock')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputGenre">Genre</label>
      <select name="genre_id" id="" class="form-control">
        <option value=" " class="form-control">---Pilih Genre---</option>
        @forelse ($genre as $dataGenre)
            @if ($dataGenre->id === $data->genre_id)
                <option value="{{ $dataGenre->id }}" selected>{{ $dataGenre->name }}</option>
            @else
                <option value="{{ $dataGenre->id }}">{{ $dataGenre->name }}</option>
            @endif
        @empty
                <option value="">Category Belum Ada!</option>
        @endforelse
      </select>
      @error('genre_id') 
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputImage" class="form-label">Image</label>
      <input type="file" class="form-control @error('image') is-invalid @enderror" id="exampleInputImage" name="image"  value="{{ $data->image }}">
      @error('image')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection