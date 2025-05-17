@extends('../layouts.master')
@section('title')
    BOOKS
@endsection

@section('content-title')
    
@endsection

@section('content')

<div class="container">
<div class="row">
  <div class="col-4">
    <div id="list-example" class="list-group">
      <a class="list-group-item list-group-item-action"><img src="{{ asset('uploads/' . ($book->image ?? '')) }}" alt=""></a>
      <a class="list-group-item list-group-item-action">Title: <strong>{{ $book->title ?? '' }}</strong></a>
      <a class="list-group-item list-group-item-action">Genre or Category: <strong>{{ $book->genre->name ?? 'No genre' }}</strong> </a>
      <a class="list-group-item list-group-item-action"><small>Tanggal dibuat: {{ $book->created_at ?? '' }}</small></a>
    </div>
  </div>
  <div class="col-8" style="height: 300px; overflow-y: auto;">
    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
      <h4 id="list-item-1">Item 1</h4>
      <p>{{ $book->summary ?? '' }}</p>
    </div>
  </div>
</div>
</div>


    
@endsection