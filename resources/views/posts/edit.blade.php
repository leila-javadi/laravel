<!-- resources/views/posts/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    <!-- Check for success message -->
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <!-- Display the form -->
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Specify PUT method for updating -->

        <!-- Title field -->
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" required>
        </div>

        <!-- Description field -->
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required>{{ old('description', $post->description) }}</textarea>
        </div>

        <!-- Submit button -->
        <div>
            <button type="submit">Update Post</button>
        </div>
    </form>
@endsection
