<!doctype html>

<html lang="en">

<head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Edit Data</title>

</head>

<body>

    <h2>Edit Data Game</h2>

    {{-- //Code disini --}}
    <form action="{{ route('game.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="mb-3">
        <label for="exampleInputGame" class="form-label">Name </label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputGame" name="name" value="{{ $data->name }}">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>

        <div class="mb-3">
        <label for="exampleInputGame" class="form-label">Gameplay </label>
        <input type="text" class="form-control @error('gameplay') is-invalid @enderror" id="exampleInputGame" name="gameplay" value="{{ $data->gameplay }}">
        @error('gameplay')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>

        <div class="mb-3">
        <label for="exampleInputDev" class="form-label">Developer </label>
        <input type="text" class="form-control @error('developer') is-invalid @enderror" id="exampleInputDev" name="developer" value="{{ $data->developer }}">
        @error('developer')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>

        <div class="mb-3">
        <label for="exampleInputYear" class="form-label">Year </label>
        <input type="text" class="form-control @error('year') is-invalid @enderror" id="exampleInputYear" name="year" value="{{ $data->year }}">
        @error('year')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

</body>

</html>