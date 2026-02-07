@extends('src.template.parent.master')

@section('title', 'Detail Category')

@section('content')
    <h1>Detail Category</h1>

    <p><strong>ID:</strong> {{ $category->id }}</p>
    <p><strong>Nama:</strong> {{ $category->name }}</p>
    <p><strong>Description:</strong> {{ $category->description }}</p>

    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Kembali</a>
@endsection