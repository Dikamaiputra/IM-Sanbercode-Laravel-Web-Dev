@extends('layouts.master')
@section('title')
    DASHBOARD
@endsection


@section('content')
    <div class="container" style="padding-bottom:83px">
        <h1>SELAMAT DATANG <strong>{{ $firstname}} {{ $lastname }}</strong>!</h1>
        <h2>Terima kasih telah bergabung di Sanberbook. Social Media kita bersama!</h2> 
    </div>
@endsection

