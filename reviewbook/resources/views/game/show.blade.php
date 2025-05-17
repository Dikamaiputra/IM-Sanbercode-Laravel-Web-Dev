<!doctype html>

<html lang="en">

<head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Detail Data</title>

</head>

<body>

    <h2>Detail Data Game</h2>

    {{-- //Code disini --}}
    <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-success">
            <h3 class="card-title">Name: {{ $data->name }}</h3>
        </div>
        <div class="card-body text-success">
            <h6 class="card-title">Gameplay</h6>
            <p class="card-text">{{ $data->gameplay }}</p>
        </div>
        <div class="card-body text-success">
            <h6 class="card-title">Developer</h6>
            <p class="card-text">{{ $data->developer }}</p>
        </div>
        <div class="card-body text-success">
            <h6 class="card-title">Gameplay</h6>
            <p class="card-text">{{ $data->gameplay }}</p>
        </div>
        <div class="card-body text-success">
            <h6 class="card-title">Year</h6>
            <p class="card-text">{{ $data->year }}</p>
        </div>
        <div class="card-footer bg-transparent border-success">
            <a href="{{ route('game.index') }}" class="btn btn-outline-secondary">Kembali</a>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

</body>

</html>