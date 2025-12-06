@extends('layouts.master')
@section ('title')
    Tampil Category
@endsection

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="container">
        <a href="{{ route('category.create') }}" class="btn btn-primary mb-3">Tambah</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($categories as $cat)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $cat->name }}</td>
                        <td>
                            <a href="{{ route('category.show', $cat->id) }}"  class="btn btn-info btn-sm"> Detail </a>
                            <a href="{{ route('category.edit', $cat->id) }}" class="btn btn-warning btn-sm"> Edit </a>
                            
                            <form action="{{ route('category.destroy', $cat->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection