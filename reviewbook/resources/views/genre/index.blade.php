@extends('../layouts.master')
@section('title')
    Genre
@endsection

@section('content-title')
    <h1>List Data Genre</h1>
@endsection

@section('content')

    @if (session()->has('sukses'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('sukses') }}
        </div>        
    @endif
<div class="table-responsive-lg">
    <table class="table">
        <thead>
            <tr>
                <td scope="col">NO</td>
                <td scope="col">Nama Genre</td>
                <td scope="col">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($genre as $data)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $data->name }}</td>
                    <td>
                        @auth 
                            @if (Auth::user()->role === 'user')
                            <a href="{{ route('genre.show', $data->id) }}" class="btn btn-outline-primary">Detail</a>
                            @endif
                        @endauth
                        @auth 
                            @if (Auth::user()->role === 'admin')
                            <a href="{{ route('genre.show', $data->id) }}" class="btn btn-outline-primary">Detail</a>
                            <a href="{{ route('genre.edit', $data->id) }}" class="btn btn-outline-warning">Edit</a>
                            <form action="{{ route('genre.destroy', $data->id) }}" method="post" class="d-inline">
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
                        <td><a href="{{ route('genre.create') }}">Tambah Data Baru</a></td>
                    </tr>
                @endif
            @endauth
        </tbody>
    </table>
</div>
@endsection