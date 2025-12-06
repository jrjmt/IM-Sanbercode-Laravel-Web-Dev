@extends('layouts.master')
@section ('title')
    Detail Category
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <p class="fs-6 text-primary"><strong>{{ $category->name }}</strong></p>
                <p><strong>{{ $category->description ?? '-' }}</strong></p>
                <a href="{{ route('category.index') }}" class="btn btn-secondary mt-3">Kembali</a>
            </div>
        </div>
    </div>
@endsection