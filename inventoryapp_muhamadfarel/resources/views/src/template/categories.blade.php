@extends('src.template.parent.master')

@section('title', 'Categories')

@section('content')
    <h1 class="mb-4">Categories</h1>

    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">
        <i class="ti ti-plus"></i> Tambah Category
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
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm">
                        <i class="ti ti-eye"></i> Detail
                    </a>

                    <form action="{{ route('categories.edit', $category->id) }}" method="GET" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-warning btn-sm">
                            <i class="ti ti-pencil"></i> Edit
                        </button>
                    </form>

                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="ti ti-trash"></i> Delete
                        </button>
                    </form>
                </td>
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
