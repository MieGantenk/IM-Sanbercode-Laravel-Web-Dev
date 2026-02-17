@extends('src.template.parent.master')

@section('title', 'Tambah Product')

@section('content')
    <h1 class="mb-4">Tambah Product</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" id="category_id" class="form-control">
                <option value="">-- Pilih Category --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Nama Product</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama produk">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar Product</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" name="price" id="price" class="form-control" placeholder="Masukkan harga">
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stok Barang</label>
            <input type="number" name="stock" id="stock" class="form-control" placeholder="Jumlah stok">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi Product</label>
            <textarea name="description" id="description" class="form-control" rows="3" placeholder="Deskripsi produk"></textarea>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="ti ti-check"></i> Simpan
        </button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection

