@extends('../layouts.master')
@section('title')
    Genre
@endsection

@section('content-title')
    <h1>List Data Genre</h1>
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <td >NO</td>
                <td>Nama Genre</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($genre as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        <a href="{{ route('genre.show', $data->genre_id) }}" class="btn btn-outline-primary">Detail</a>
                        <a href="{{ route('genre.edit', $data->genre_id) }}" class="btn btn-outline-warning">Edit</a>
                        <form action="{{ route('genre.destroy', $data->genre_id) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection