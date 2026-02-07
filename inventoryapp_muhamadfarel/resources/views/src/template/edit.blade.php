@extends('src.template.parent.master')

@section('title', 'Edit Category')

@section('content')
    <h1>Edit Category</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama Product</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" class="form-control" rows="3">{{ $category->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="ti ti-check"></i> Update
        </button>
    </form>
@endsection
