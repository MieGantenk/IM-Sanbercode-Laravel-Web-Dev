@extends('src.template.parent.master')

@section('title', 'Categories')

@section('content')
    <h1 class="mb-4">Transaction</h1>

    <a href="{{ route('transactions.create') }}" class="btn btn-primary mb-3">
        <i class="ti ti-plus"></i> Tambah
    </a>

    @if(session('success'))
        <div class="alert alert-success mt-2">
            {{ session('success') }}
        </div>
    @endif

    @php $no = 1 @endphp

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nama Product</th>
                <th>Type</th>
                <th>Amount</th>
                <th>Notes</th>
            </tr>
        </thead>
        @foreach ($products as $product)
            @php
                $lastTransaction = $product->transactions()->latest()->first();
            @endphp
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ auth()->user()->name }}</td>
                <td>{{ $product->name }}</td>
                <td>
                    @if($lastTransaction)
                        <span class="badge {{ $lastTransaction->type === 'in' ? 'bg-success' : 'bg-danger' }}">
                            {{ ucfirst($lastTransaction->type) }}
                        </span>
                    @else
                        <span class="text-muted">Belum ada transaksi</span>
                    @endif
                </td>

                <td>{{ $lastTransaction->amount ?? '-' }}</td>
                <td>{{ $lastTransaction->notes ?? '-' }}</td>
            </tr>
        @endforeach

        </body>
    </table>

    <script>
        document.getElementById('toggleForm').addEventListener('click', function() {
            const formContainer = document.getElementById('formContainer');
            formContainer.style.display = formContainer.style.display === 'none' ? 'block' : 'none';
        });
    </script>
@endsection