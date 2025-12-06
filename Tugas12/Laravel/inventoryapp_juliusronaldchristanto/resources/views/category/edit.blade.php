@extends('layouts.master')
@section ('title')
    Edit Category
@endsection

@section('content')
    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $category->name }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control">{{ $category->description }}</textarea>
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
@endsection