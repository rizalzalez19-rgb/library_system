@extends('layouts.app')

@section('title', 'Kategori Buku')

@section('content')
    <h2>Kategori Buku</h2>
    <ul>
        @foreach($categories as $category)
            <li>{{ $category->name }} ({{ $category->books_count }} buku)</li>
        @endforeach
    </ul>
@endsection