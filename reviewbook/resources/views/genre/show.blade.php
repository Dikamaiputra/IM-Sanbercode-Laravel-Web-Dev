@extends('../layouts.master')
@section('title')
    Genre
@endsection

@section('content-title')
    <h1>Detail Data Genre</h1>
@endsection

@section('content')
    <div class="card-body">
        <h5>Name Genre</h5>
        <p>{{ $data->name }}</p>
        <h5>Description</h5>
        <p>{{ $data->description }}</p>
        <h5>Tanggal Dibuat</h5>
        <p>{{ $data->created_at }}</p>
    </div>
    <div class="card-footer">
        <a href="{{ route('genre.index') }}" class="btn btn-outline-primary">Kembali</a>
    </div>
    {{-- <table class="table">
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
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
@endsection