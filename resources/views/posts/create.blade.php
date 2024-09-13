<!-- resources/views/posts/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create a New Post</h1>

    <!-- Display the form -->
    <form class="bg-white position-absolute py-4 px-3 px-lg-5 rounded " action="{{ route('posts.article') }}" method="POST">
        @csrf <!-- Include CSRF token for security -->

        <!-- Title field -->
        <div class="form-group mb-2">
            <label class="my-2" for="title">Title:</label>
            <input class="form-control" type="text" id="title" name="title" required>
        </div>

        <!-- Description field -->
        <div class="form-group mb-2">
            <label class="my-2" for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>

        <!-- Submit button -->
        <div>
            <button class="btn btn-outline-primary btn-sm" type="submit">Submit</button>
        </div>
    </form>
@endsection
