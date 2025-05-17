<!doctype html>

<html lang="en">

<head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Table Data</title>

</head>

<body>

    <h2>List Game</h2>

    <a href="{{ route('game.create') }}" class="btn btn-primary mb-2">Tambah</a>

    {{-- //isi link a href menuju ke form tambah data --}}

    <table class="table">

        <thead class="thead-light">

            <tr>

                <th scope="col">#</th>

                <th scope="col">Name</th>

                <th scope="col">Gameplay</th>

                <th scope="col">Developer</th>

                <th scope="col">Year</th>

                <th scope="col">Actions</th>

            </tr>

        </thead>

        <tbody>

            {{-- //code disini tampilakan semua data di database dan buat link dan tombol untuk edit, detail, dan delete --}}
            @foreach ($data as $game)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $game->name }}</td>
                    <td>{{ $game->gameplay }}</td>
                    <td>{{ $game->developer }}</td>
                    <td>{{ $game->year }}</td>
                    <td>
                        <a href="{{ route('game.show', $game->id) }}" class="btn btn-outline-primary">Detail</a>
                        <a href="{{ route('game.edit', $game->id) }}" class="btn btn-outline-warning">Edit</a>
                        <form action="{{ route('game.destroy', $game->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

</body>

</html>