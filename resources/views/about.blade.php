@extends('layouts.main')

@section('container')
    <h1>Hello, selamat datang diabout!</h1>
    <h2>{{ $nama }}</h2>
    <p>{{ $email }}</p>
    <img src="{{ $image }}" alt="{{ $nama }}" width="500px" class="img-thumbnail rounded-circle">
@endsection
