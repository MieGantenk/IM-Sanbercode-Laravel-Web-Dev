@extends('src.template.parent.master')

@section('title', 'Tambah Category')

@section('content')
    <h1 class="mb-4">Daftar Produk per Kategori</h1>
    @isset($category)
        <h2 class="mt-5">Produk dalam kategori: {{ $category->name }}</h2>
        <p>{{ $category->description }}</p>

        <table class="table table-bordered">
            <thead class="">
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($category->products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>Rp{{ number_format($product->price, 0, ',', '.') }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>
                            <a href="{{ route('listcategories.show', $category->id) }}" class="btn btn-info btn-sm">
                                <i class="ti ti-eye"></i> Show
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada produk untuk kategori ini.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    @endisset
@endsection
