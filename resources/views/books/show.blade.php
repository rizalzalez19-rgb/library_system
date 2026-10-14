@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <h2>Detail Buku</h2>
    <p>ID: {{ $id }}</p>

    @if($stock > 0)
        <p>Buku tersedia.</p>
    @else
        <p>Buku sedang habis.</p>
    @endif
@endsection