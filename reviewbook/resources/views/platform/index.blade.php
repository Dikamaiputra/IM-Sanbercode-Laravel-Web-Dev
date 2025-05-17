@extends('../layouts.master')
@section('title')
    Platform
@endsection

@section('content-title')
    <h1>List Data Platform</h1>
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
                <td>Nama Genre</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($platform as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        <a href="{{ route('genre.show', $data->id) }}" class="btn btn-outline-primary">Detail</a>
                        <a href="{{ route('genre.edit', $data->id) }}" class="btn btn-outline-warning">Edit</a>
                        <form action="{{ route('genre.destroy', $data->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td><a href="{{ route('platform.create') }}">Tambah Data Baru</a></td>
            </tr>
        </tbody>
    </table>
@endsection