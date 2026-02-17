@extends('src.template.parent.master')

@section('title', 'Edit Product')

@section('content')
    <h1 class="mb-4">Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Nama Product</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar Product</label>
            <input type="file" name="image" id="image" class="form-control">
            <small>Gambar saat ini:</small><br>
            <img src="{{ asset('storage/' . $product->image) }}" width="150" alt="{{ $product->name }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}">
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stok Barang</label>
            <input type="number" name="stock" id="stock" class="form-control" value="{{ $product->stock }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi Product</label>
            <textarea name="description" id="description" class="form-control" rows="3">{{ $product->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="ti ti-check"></i> Update
        </button>
        <a href="{{ route('products.show', $product->id) }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
