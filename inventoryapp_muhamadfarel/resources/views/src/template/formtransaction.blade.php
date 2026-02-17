@extends('src.template.parent.master')

@section('title', 'Tambah Transaction')

@section('content')
    <h1 class="mb-4">Tambah Transaction</h1>

    <form action="{{ route('transactions.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="type" class="form-label">Nama Product</label>
            <select name="product_id" id="product_id" class="form-select" required>
                <option value="">-- Pilih Nama Product --</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select name="type" id="type" class="form-select" required>
                <option value="">-- Pilih Type --</option>
                <option value="in">In (Masuk)</option>
                <option value="out">Out (Keluar)</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="amount" class="form-label">Jumlah</label>
            <input type="number" name="amount" id="amount" class="form-control" placeholder="Masukkan jumlah produk" required>
        </div>

        <div class="mb-3">
            <label for="notes" class="form-label">Notes</label>
            <textarea name="notes" id="notes" class="form-control" rows="3" placeholder="Tambahkan catatan"></textarea>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="ti ti-check"></i> Simpan
        </button>
    </form>
@endsection
