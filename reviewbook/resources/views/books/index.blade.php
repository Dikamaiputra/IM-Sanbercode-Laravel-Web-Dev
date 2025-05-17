@extends('../layouts.master')
@section('title')
    BOOKS
@endsection

@section('content-title')
    <h1>List Data Buku</h1>
@endsection

@section('content')

    @if (session()->has('sukses'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('sukses') }}
        </div>        
    @endif
    <table class="table">
        <thead>
            <tr>
                <td >NO</td>
                <td>Title</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->title }}</td>
                    <td>
                        @auth 
                            @if (Auth::user()->role === 'user')
                            <a href="{{ route('books.show', $data->id) }}" class="btn btn-outline-primary">Detail</a>
                            @endif
                        @endauth
                        @auth 
                            @if (Auth::user()->role === 'admin')
                            <a href="{{ route('books.show', $data->id) }}" class="btn btn-outline-primary">Detail</a>
                            <a href="{{ route('books.edit', $data->id) }}" class="btn btn-outline-warning">Edit</a>
                            <form action="{{ route('books.destroy', $data->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                            @endif
                        @endauth
                    </td>
                </tr>
            @endforeach

            @auth
                @if (Auth::user()->role === 'admin')
                    <tr>
                        <td><a href="{{ route('books.create') }}">Tambah Data Baru</a></td>
                    </tr>
                @endif
            @endauth
        </tbody>
    </table>
@endsection