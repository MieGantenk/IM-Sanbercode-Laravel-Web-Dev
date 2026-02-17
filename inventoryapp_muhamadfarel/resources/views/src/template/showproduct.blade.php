@extends('src.template.parent.master')

@section('title', 'Detail Product')

@section('content')
    <h1 class="mb-4">Detail Product</h1>

    <div class="card mb-4">
        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text"><strong>Kategori:</strong> {{ $product->category_id }}</p>
            <p class="card-text"><strong>Harga:</strong> Rp {{ number_format($product->price, 0, ',', '.') }}</p>
            <p class="card-text"><strong>Stok:</strong> {{ $product->stock }}</p>
            <p class="card-text"><strong>Deskripsi:</strong> {{ $product->description }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@endsection
