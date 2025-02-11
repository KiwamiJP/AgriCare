@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Book Details</h3>
        </div>
        <div class="card-body">
            <p><strong>Title:</strong> {{ $book->title }}</p>
            <p><strong>Author:</strong> {{ $book->author }}</p>
            <p><strong>Category:</strong> {{ $book->category->name ?? 'N/A' }}</p>
            <p><strong>File:</strong> <a href="{{ Storage::url($book->file_path) }}" target="_blank">Download</a></p>
            <a href="{{ route('admin.books.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection