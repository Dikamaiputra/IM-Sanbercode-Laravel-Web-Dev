@extends('../layouts.master')
@section('title')
FORM LOGIN
@endsection

@section('content-title')
<h1>Login Account!</h1>
@endsection

@section('content')

@if(session()->has('sukses'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('sukses') }}
    </div>
@endif

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Login</h4>
                </div>
                <div class="card-body">

                    @if(session('status'))
                        <div class="alert alert-info">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ old('email') }}" required autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <button type="submit" class="btn btn-success w-100">Login</button>

                        <div class="d-lg-flex justify-content-between align-items-center mt-2">
                            <div >
                                <p>Belum punya akun?</p>
                            </div>
                            <div >
                                <p><a href="{{ route('register') }}">Daftar Disini</a></p>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>


@endsection