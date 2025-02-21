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

            <!-- Display Cover Image -->
            @if($book->cover_image)
    <p><strong>Cover:</strong></p>
    <img src="{{ asset('storage/' . $book->cover_image) }}" 
         alt="{{ $book->title }}" 
         class="img-thumbnail" 
         width="150">
@endif

            <!-- File Download Link -->
            <p><strong>File:</strong> 
                @if($book->file_path)
                <a style="text-decoration:none" href="{{ asset($book->file_path) }}" target="_blank">Download</a>
                @else
                    <span class="text-muted">No file available</span>
                @endif
            </p>

            <a href="{{ route('admin.books.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection
