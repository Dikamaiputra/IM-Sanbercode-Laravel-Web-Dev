@extends('../layouts.master')
@section('title')
BOOKS
@endsection

@section('content-title')
<h1>Create New Books</h1>
@endsection

@section('content')
<form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="genre_id" class="form-label">Genre</label>
          <select name="genre_id" id="" class="form-control">
              <option value="">--Pilig Genre--</option>
            @forelse ($genres as $genre)
              <option value="{{ $genre->id }}">{{ $genre->name }}</option>
              @empty
              <option value="">Genre Belum Ada</option>
            @endforelse
          </select>
        @error('genre_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="summary" class="form-label">Summary</label>
        <textarea name="summary" id="summary" cols="30" rows="10" class="form-control"></textarea>
        @error('summary')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="text" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock">
        @error('stock')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Photo for Books</label>
        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection