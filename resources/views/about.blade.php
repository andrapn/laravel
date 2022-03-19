@extends('layouts.main')

@section('container')
    <h1>Halaman about</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="images/{{ $images }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
@endsection

