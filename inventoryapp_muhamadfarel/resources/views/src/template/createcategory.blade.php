@extends('src.template.parent.master')

@section('title', 'Tambah Category')

@section('content')
    <h1 class="mb-4">Tambah Category</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Product</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama category">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" class="form-control" rows="3" placeholder="Masukkan deskripsi category"></textarea>
        </div>
        <button type="submit" class="btn btn-success">
            <i class="ti ti-check"></i> Simpan
        </button>
    </form>
@endsection

